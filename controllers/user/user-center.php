<?php

$config = require __DIR__ . '/../../config.php';

require __DIR__ . '/../../Core/Database.php';

$db = new Database($config['database']);

$info = $db->query('select * from users where email = :email', [
    'email' => $_SESSION['user']['email']
])->find();

$blogs = $db->query('select * from blog where user_id = :user_id', [
    'user_id' => $info['id']
]);

$style = "../../assets/styles/user/center-style.css";

require __DIR__ . '/../../views/user/user-center.view.php';
