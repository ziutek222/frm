<?php


$style = "../../assets/styles/registration/create-style.css";

$config = require __DIR__ . '/../../config.php';

require __DIR__ . '/../../Core/Database.php';

$db = new Database($config['database']);


require __DIR__ . '/../../views/registration/create.view.php';
