<?php

if (!isset($router)) {
    die('Router has not set properly!');
}

$router->get('/', 'app/controllers/index.php');
$router->get('/about', 'app/controllers/about.php');
$router->get('/contact', 'app/controllers/contact.php');
$router->get('/notes', 'app/controllers/notes/index.php');

$router->get('/note', 'app/controllers/notes/show.php');
$router->delete('/note', 'app/controllers/notes/destroy.php');

$router->get('/note-create', 'app/controllers/notes/create.php');
$router->post('/note-create', 'app/controllers/notes/store.php');

$router->get('/note-edit', 'app/controllers/notes/edit.php');
$router->patch('/note-edit', 'app/controllers/notes/update.php');

$router->get('/registration','app/controllers/auth/register/create.php');
$router->post('/registration','app/controllers/auth/register/store.php');

