<?php
$server = "localhost";
$user = "root";
$password = "Saadia@02";
$dbname = "novacraft";

$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn) {
    die("Erreur de connexion à la base de données");
}
require_once './router/router.php'; 
?>