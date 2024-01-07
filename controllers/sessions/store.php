<?php

require __DIR__ . '/../../Core/Validator.php';
$config = require __DIR__ . '/../../config.php';

require __DIR__ . '/../../Core/Database.php';

$db = new Database($config['database']);

$email = $_POST['email'];
$password = $_POST['password'];

$id = $db->query('select id from users where email = :email', [

    'email' => $_SESSION['user']['email']
])->find();


$errors = [];

if (!Validator::string($password)) {
    $errors['password'] = 'Please insert Valid password';
}

if (!Validator::email($email)) {
    $errors['email'] = 'Please insert valid email';
}

if (!empty($errors)) {
    return require __DIR__ . '/../../views/sessions/create.view.php';
}

$user = $db->query(
    "select * from users where email = :email",
    [
        'email' => $email
    ]
)->find();

if (!$user) {
    $errors['email'] = "Email not found";
    return require __DIR__ . '/../../views/sessions/create.view.php';
}

if (password_verify($password, $user['password'])) {
    login($email, $id['id']);
    header('Location: /');
    exit();
}
$errors['password'] = "No matching password found";
return require __DIR__ . '/../../views/sessions/create.view.php';
