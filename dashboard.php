<?php
session_start();
require_once("config/database.php");

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

$total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM colis"))['total'];
$livre = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM colis WHERE statut='livre'"))['total'];
$attente = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM colis WHERE statut='en_attente'"))['total'];
$transit = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM colis WHERE statut='en_transit'"))['total'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard - JUDI TRANSPORT</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="sidebar">
    <h2>JUDI TRANSPORT</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="ajout-colis.php">Ajouter Colis</a>
    <a href="liste-colis.php">Liste Colis</a>
    <a href="suivi-colis.php">Suivi Colis</a>
    <a href="logout.php">Déconnexion</a>
</div>

<div class="main-content">

    <div class="header">
        <h1>TABLEAU DE BORD</h1>
        <p>Bienvenue, <?php echo $_SESSION["username"]; ?></p>
    </div>

    <div class="cards">

        <div class="card blue">
            <h3>Total Colis</h3>
            <p><?php echo $total; ?></p>
        </div>

        <div class="card green">
            <h3>Colis Livrés</h3>
            <p><?php echo $livre; ?></p>
        </div>

        <div class="card orange">
            <h3>En Transit</h3>
            <p><?php echo $transit; ?></p>
        </div>

        <div class="card red">
            <h3>En Attente</h3>
            <p><?php echo $attente; ?></p>
        </div>

    </div>

</div>

</body>
</html>
