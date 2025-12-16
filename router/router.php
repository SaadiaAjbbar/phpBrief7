<?php

$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$allPages=[
      "/" => "views/home.php",
      "/contact" => "views/contact.php",
      "/services" => "views/services.php",
      "/about" => "views/about.php",

];


if (isset($allPages[$page])) {
    $path = $allPages[$page];
} else {
    $path = "views/404.php";
}

    include 'templates/header.php';
    include "$path";
    include 'templates/footer.php';



?>

