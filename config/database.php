<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "judi_transport";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Erreur connexion base de données : " . mysqli_connect_error());
}

?>
