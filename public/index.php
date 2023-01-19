<?php
require __DIR__ . '/../vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404';
});

$router->get("/", function () {
    include __DIR__ . '/../views/pages/home.php';
    exit;
});

$router->get("/me", function () {
    include __DIR__ . '/../views/pages/home_me.php';
    exit;
});

$router->get("/contact", function () {
    include __DIR__ . '/../views/pages/contact.php';
    exit;
});

$router->get("/contact&lang=me", function () {
    include __DIR__ . '/../views/pages/contact_me.php';
    exit;
});

$router->get("/about", function () {
    include __DIR__ . '/../views/pages/about.php';
    exit;
});

$router->get("/about&lang=me", function () {
    include __DIR__ . '/../views/pages/about_me.php';
    exit;
});

$router->run();
