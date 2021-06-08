<?php

function fillСheck(string $arg, string $fieldName): array
{
    return empty($arg) ? ["{$fieldName}_error_msg" => 'Заполните поле'] : [];
}

function emailСheck(string $arg, string $fieldName): array
{
    return !filter_var($arg, FILTER_VALIDATE_EMAIL) ? ["{$fieldName}_error_msg" => 'Введите корректный e-mail'] : [];
}

function maxLengthСheck(string $arg, string $fieldName, int $maxLength): array
{
    return mb_strlen($arg, 'UTF-8') > $maxLength ? ["{$fieldName}_error_msg" => "Вводите не более {$maxLength} символов"] : [];
}