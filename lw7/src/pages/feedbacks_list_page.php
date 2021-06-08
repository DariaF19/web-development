<?php

function feedbackPage(): void
{
    renderTemplate('feedbacks.tpl.php');
}

function feedbacksListPage(): void
{
    $error = [];
    $email = getParameter('email');
    $pathToFile = __DIR__ . '/../../data/' . $email . '.txt';

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

    $error = array_merge($error, emailValidate($email));

    renderTemplate('feedbacks.tpl.php', array_merge($error, $data));
}

function emailValidate(string $email): array
{
    $error = [];
    $error = array_merge($error, emailСheck($email, 'email'));
    $error = array_merge($error, fillСheck($email, 'email'));
    $error = array_merge($error, maxLengthСheck($email, 'email', 150));

    return $error;
}