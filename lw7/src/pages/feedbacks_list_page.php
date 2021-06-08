<?php

const PATH_TO_FOLDER = __DIR__ . '/../../data/';
const FILE_EXTENSION = '.txt';

function feedbackPage(): void
{
    renderTemplate('feedbacks.tpl.php');
}

function feedbacksListPage(): void
{
    $error = [];
    $email = getPostParameter('email');
    $pathToFile = PATH_TO_FOLDER . $email . FILE_EXTENSION;

    if (file_exists($pathToFile))
    {
        $rawData = file_get_contents($pathToFile);
        $data = json_decode($rawData, true);
    }
    else
    {
        $error['email_error_msg'] = 'E-mail не найден';
        $data['email'] = $email;
    }

    $error = array_merge($error, validateEmail($email));

    renderTemplate('feedbacks.tpl.php', array_merge($error, $data));
}

function validateEmail(string $email): array
{
    $error = [];
    $error = array_merge($error, getErrorAsArrayIfNotValidEmail($email, 'email'));
    $error = array_merge($error, getErrorAsArrayIfNotFilled($email, 'email'));
    $error = array_merge($error, getErrorAsArrayIfStringExceedsMaxLength($email, 'email', 150));

    return $error;
}