<?php
$page = "/profile";
require_once __DIR__ . '/../config/bd.php';

if (!isset($_SESSION['user'])) {
    header("Location: /login");
    exit;
}

$user_id = $_SESSION['user']['id'];

$requete = "SELECT name, email, created_at FROM users WHERE id = $user_id";
$result = mysqli_query($connexion, $requete);
$user = mysqli_fetch_assoc($result);

if (!$user) {
    session_destroy();
    header("Location: /login");
    exit;
}

require 'templates/header.php';
require 'views/profile.view.php';
require 'templates/footer.php';
