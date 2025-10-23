<?php

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

#$path = parse_url($request, PHP_URL_PATH);

include_once '../templates/header.php';

switch ($request) {
    case '/jukebox/':
        include_once '../templates/home.php';
        break;

    case '/jukebox/features':
        include_once '../templates/features.php';
        break;

    case '/jukebox/api':
        break;

    case '/jukebox/sign-up':
        break;

    case '/jukebox/sign-in':
        break;

    case '/jukebox/sign-out':
        break;

    case '/jukebox/my-jukebox':
        break;

    case '/jukebox/profile':
        break;

    case '/jukebox/all':
        break;

    case '/jukebox/collections':
        break;

    default:
        http_response_code(404);
        include_once '../templates/404.php';
        break;
}
