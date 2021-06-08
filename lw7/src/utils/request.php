<?php

function getPostParameter(string $name): ?string
{
    return isset($_POST[$name]) ? (string) $_POST[$name] : null;
}

function getPostParameters(array $keys): array
{
    $data = [];
    foreach ($keys as $key)
    {
        $data[$key] = getPostParameter($key);
    }
    return $data;
}

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}