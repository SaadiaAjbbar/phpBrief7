<?php

$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$allPages = [
    "/" => "controllers/home.controller.php",
    "/contact" => "controllers/contact.controller.php",
    "/services" => "controllers/services.controller.php",
    "/about" => "controllers/about.controller.php",
    "/register" => "controllers/register.controller.php",
    "/login" => "controllers/login.controller.php",
    "/profile" => "controllers/profile.controller.php",
    "/logout"  => "controllers/logout.controller.php"
];

if (isset($allPages[$page])) {
    $path = $allPages[$page];
} else {
    $path = "controllers/404.controller.php";
}

require $path;
