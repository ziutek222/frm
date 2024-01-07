<?php

require __DIR__ . '/../../Core/Validator.php';
$config = require __DIR__ . '/../../config.php';

require __DIR__ . '/../../Core/Database.php';

$db = new Database($config['database']);

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];

if (!Validator::string($password, 8, 255)) {
    $errors['password'] = 'Please insert Valid password';
}

if (!Validator::email($email)) {
    $errors['email'] = 'Please insert valid email';
}

if (!empty($errors)) {
    return require __DIR__ . '/../../views/registration/create.view.php';
}

$user = $db->query(
    "select * from users where email = :email",
    [
        'email' => $email
    ]
)->find();

if ($user) {
    header('Location: /');
} else {
    $db->query("insert into users(name, surname, email, password) values(:name, :surname, :email, :password)", [
        'name' => $name,
        'surname' => $surname,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    login($email);

    header('Location: /');

    exit();
}
