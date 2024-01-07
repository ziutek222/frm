<?php

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/blog', 'controllers/blog/index.php');

$router->get('/blog/create', 'controllers/blog/create.php');
$router->post('/blog', 'controllers/blog/store.php');

$router->get('/blog/read', 'controllers/blog/read.php');

$router->get('/register', 'controllers/registration/create.php');
$router->only('guest');
$router->post('/register', 'controllers/registration/store.php');
$router->only('guest');

$router->get('/login', 'controllers/sessions/create.php');
$router->only('guest');
$router->post('/login', 'controllers/sessions/store.php');
$router->only('guest');
$router->delete('/logout', 'controllers/sessions/destroy.php');
$router->only('guest');

$router->get('/user/info', 'controllers/user/user-info.php');
$router->only('auth');
$router->get('/user/center', 'controllers/user/user-center.php');
$router->only('auth');
