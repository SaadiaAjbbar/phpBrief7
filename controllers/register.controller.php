<?php
$page = "/register";
$errors = [];
$success = '';
$name = '';
$email = '';
$password = '';

require_once __DIR__ . '/../config/bd.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($name)) {
        $errors[] = "Le name ne doit pas etre vide";
    } elseif (!preg_match("/^[a-zA-Z\s'-]+$/", $name)) {
        $errors[] = "Le name doit contenir just des lettres";
    }

    if (empty($email)) {
        $errors[] = "L'email ne doit pas etre vide";
    } elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.(com|fr|net|org)$/", $email)) {
        $errors[] = "L'email est non valide";
    }

    if (empty($password)) {
        $errors[] = "Le passwword ne doit pas etre vide";
    } elseif (!preg_match("/^[a-zA-Z0-9\s]{10,100}$/", $password)) {

        if (strlen($password) < 6) {
            $errors[] = "Le password est trop court doit avoir plus de 6 caracteres";
        }
    }
    
}




if (empty($errors) && !empty($email)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = mysqli_query($connexion, "SELECT * FROM users WHERE email='$email'");
    $rows = false;
    if (mysqli_num_rows($sql) == 0) {
        $rows = true;
    }

    if ($rows) {
        $requete = "INSERT INTO users (name, email, password, created_at)
                VALUES ('$name', '$email', '$hashed_password', NOW())";
     if (mysqli_query($connexion, $requete) == true) {
        $success = "Utilisateur bien ete ajoute";
        $name = $email = $password = '';
     } else {
        $errors[] = "erreur d'inscription";
     }
    } else {
         $errors[] = "deja existe un comptz avec cet email";
    }
    
}

require 'templates/header.php';
require 'views/register.view.php';
require 'templates/footer.php';
