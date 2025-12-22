<?php
$page = "/contact";
$errors = [];
$success = '';
$nom = '';
$email = '';
$message = '';
require_once __DIR__ . '/../config/bd.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($nom)) {
        $errors[] = "Le nom ne doit pas etre vide";
    } elseif (!preg_match("/^[a-zA-Z\s'-]+$/", $nom)) {
        $errors[] = "Le nom doit contenir just des lettres";
    }

    if (empty($email)) {
        $errors[] = "L'email ne doit pas etre vide";
    } elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.(com|fr|net|org)$/", $email)) {
        $errors[] = "L'email est non valide";
    }

    if (empty($message)) {
        $errors[] = "Le message ne doit pas etre vide";
    } elseif (!preg_match("/^[a-zA-Z0-9\s]{10,100}$/", $message)) {

        if (strlen($message) < 10) {
            $errors[] = "Le message est trop court";
        } else {
            $errors[] = "Le message est trop long";
        }
    }

    if (empty($errors)) {
        $requete = "
            INSERT INTO contacts (name, email, message, created_at)
            VALUES ('$nom', '$email', '$message', NOW())
        ";

        if (mysqli_query($connexion, $requete)) {
            $success = "Votre message a bien été envoyé";
            $nom = '';
            $email = '';
            $message = '';
        } else {
            $errors[] = "Erreur lors de l'envoi du message";
        }
    }
}

require 'templates/header.php';
require './views/contact.view.php';
require 'templates/footer.php';
