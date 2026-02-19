<?php
session_start();
// Vérifier si l'utilisateur est connecté (sauf pour la page de login)
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage !== 'index.php' && !isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDI TRANSPORT - <?php echo $pageTitle ?? 'Accueil'; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>