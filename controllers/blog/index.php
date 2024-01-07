<?php

$style = "../../assets/styles/blog/blog-style.css";

$config = require __DIR__ . '/../../config.php';

require __DIR__ . '/../../Core/Database.php';

$db = new Database($config['database']);

$query = 'SELECT * FROM `blog`';

$blogs = $db->query($query)->get();


require __DIR__ . '/../../views/blog/index.view.php';
