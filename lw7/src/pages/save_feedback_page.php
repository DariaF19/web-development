<?php
const INPUT_MAX_LENGTH = 150;
const TEXTAREA_MAX_LENGTH = 1000;

function saveFeedbackPage(): void
{
    $data = getPostParameters(['name', 'email', 'country', 'gender', 'message']);

    $errors = validateСontactForm($data);

    if(empty($errors))
    {
        $file = fopen(__DIR__ . '/../../data/' . strtolower($data['email']) . '.txt', 'w');
        $text = json_encode($data);
        $args['save_status'] = (boolean) fwrite($file, $text);
        fclose($file);
    }
    else
    {
        $args = array_merge($errors, $data);
    }

    renderTemplate('main.tpl.php', $args);
}

function validateСontactForm(array $data): array
{
    $errors = [];
    $errors = array_merge($errors, getErrorAsArrayIfNotFilled($data['name'], 'name'));
    $errors = array_merge($errors, getErrorAsArrayIfNotValidEmail($data['email'], 'email'));
    $errors = array_merge($errors, getErrorAsArrayIfNotFilled($data['email'], 'email'));
    $errors = array_merge($errors, getErrorAsArrayIfNotFilled($data['message'], 'message'));
    $errors = array_merge($errors, getErrorAsArrayIfStringExceedsMaxLength($data['name'], 'name', INPUT_MAX_LENGTH));
    $errors = array_merge($errors, getErrorAsArrayIfStringExceedsMaxLength($data['email'], 'email', INPUT_MAX_LENGTH));
    $errors = array_merge($errors, getErrorAsArrayIfStringExceedsMaxLength($data['message'], 'message', TEXTAREA_MAX_LENGTH));

    return $errors;
}