<?php

$style = "../../assets/styles/blog/read-style.css";

$config = require __DIR__ . '/../../config.php';

require __DIR__ . '/../../Core/Database.php';

$db = new Database($config['database']);

$query = 'SELECT * FROM `blog` where id = :id';

$blog = $db->query($query, [
    'id' => $_GET['id']
])->findOrFail();


require __DIR__ . '/../../views/blog/read.view.php';
