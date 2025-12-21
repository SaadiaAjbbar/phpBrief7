<?php 
$page = "/login";
session_start();
$errors = [];

require_once __DIR__ . '/../config/bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['email'])) {
        $email = trim($_POST['email']);
    } else {
        $email = '';
    }

    if (isset($_POST['password'])) {
        $password = trim($_POST['password']);
    } else {
        $password = '';
    }

    if ($email === '' || $password === '') {
        $errors[] = "tu dois remplire tous les champs email et password!!!";
    }

    if (empty($errors)) {

        $requet = "SELECT id, password FROM users WHERE email = '$email'";

        $result = mysqli_query($connexion, $requet);

        if (mysqli_num_rows($result) === 1) {

            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['id'];
                header("Location: /profile");
                exit;

            } else {
                $errors[] = "mot de passe incorrect";
            }

        } else {
            $errors[] = "email non trouve";
        }
    }
}

require 'templates/header.php';
require 'views/login.view.php';
require 'templates/footer.php';
