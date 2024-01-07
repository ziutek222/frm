<?php

$config = require __DIR__ . '/../../config.php';

require __DIR__ . '/../../Core/Database.php';

$db = new Database($config['database']);

$errors = [];

$query = "INSERT INTO blog(user, title, content) values ('{$_POST["user"]}', '{$_POST["title"]}', '{$_POST["content"]}')";

if (empty($errors)) {
    $db->query('INSERT INTO `blog`(user, title, content, user_id) values (:user, :title, :content, :user_id)', [
        'user' => $_SESSION['user']['email'],
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'user_id' => $_SESSION['user']['id']
    ]);

    header('Location: /blog');
    exit();
};
