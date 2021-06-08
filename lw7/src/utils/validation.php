<?php

function getErrorAsArrayIfNotFilled(string $arg, string $fieldName): array
{
    return empty($arg) ? ["{$fieldName}_error_msg" => 'Заполните поле'] : [];
}

function getErrorAsArrayIfNotValidEmail(string $arg, string $fieldName): array
{
    return !filter_var($arg, FILTER_VALIDATE_EMAIL) ? ["{$fieldName}_error_msg" => 'Введите корректный e-mail'] : [];
}

function getErrorAsArrayIfStringExceedsMaxLength(string $arg, string $fieldName, int $maxLength): array
{
    return mb_strlen($arg, 'UTF-8') > $maxLength ? ["{$fieldName}_error_msg" => "Вводите не более {$maxLength} символов"] : [];
}