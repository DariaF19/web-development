<?php

function getParameter(string $name): ?string
{
    return isset($_POST[$name]) ? (string) $_POST[$name] : null;
}

function getParameters(array $keys): array
{
    $data = [];
    foreach ($keys as $key)
    {
        $data[$key] = getParameter($key);
    }
    return $data;
}

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}