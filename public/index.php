<?php

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$path = parse_url($request, PHP_URL_PATH);

include_once '../templates/header.php';

switch ($path) {
    case '/jukebox/':
        include_once '../templates/home.php';
        break;

    case '/jukebox/features':
        include_once '../templates/features.php';
        break;

    case '/jukebox/api':
        include_once '../templates/api.php';
        break;

    case '/jukebox/sign-up':
        include_once '../templates/registration/sign-up.php';
        if (isset($_POST['signup'])) {
           header("Location: /jukebox/sign-up/preferences");
           exit();
        }
        break;

    case '/jukebox/sign-up/preferences':
        include_once '../templates/registration/preferences.php';
        if(isset($_POST['genres'])) {
            header("Location: /jukebox/");
            exit();
        }
        break;

    case '/jukebox/sign-up/upload-music':
        break;

    case '/jukebox/sign-in':
        include_once '../templates/sign-in.php';
        break;

    case '/jukebox/sign-out':
        include_once '../templates/sign-out.php';
        break;

    case '/jukebox/my-jukebox':
        include_once '../templates/jukebox.php';
        break;

    case '/jukebox/profile':
        include_once '../templates/profile.php';
        break;

    case '/jukebox/music/collections':
        include_once '../templates/jukeboxes.php';
        break;

    default:
        http_response_code(404);
        include_once '../templates/404.php';
        break;
}

include_once '../templates/footer.php';
