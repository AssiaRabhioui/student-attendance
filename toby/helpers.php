<?php


use JetBrains\PhpStorm\NoReturn;

if (!function_exists('dd')) {
    #[NoReturn]
    function dd(...$vars)
    {
        var_dump($vars);
        die();
    }
}
if (!function_exists('env')) {
    function env(string $key): mixed
    {
        return $_ENV[$key];
    }
}