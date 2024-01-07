<?php

$config = require __DIR__ . '/../../config.php';

require __DIR__ . '/../../Core/Database.php';

$db = new Database($config['database']);

$style = "../../assets/styles/user/info-style.css";

$info = $db->query('select * from users where email = :email', [
    'email' => $_SESSION['user']['email']
])->find();

require __DIR__ . '/../../views/user/user-info.view.php';
