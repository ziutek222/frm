<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function login($email, $id)
{
    session_start();
    $_SESSION['user'] = [
        'email' => $email,
        'id' => $id
    ];
    session_regenerate_id(true);
}

function logout()
{
    $_SESSION = [];

    session_destroy();
    $params = session_get_cookie_params();

    setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain']);
    dd($_SESSION);
}
