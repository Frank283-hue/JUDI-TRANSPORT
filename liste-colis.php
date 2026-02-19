<?php
session_start();
require_once("config/database.php");

$result=mysqli_query($conn,"SELECT * FROM colis");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="sidebar">
<h2>JUDI TRANSPORT</h2>
<a href="dashboard.php">Dashboard</a>
<a href="ajout-colis.php">Ajouter Colis</a>
<a href="liste-colis.php">Liste Colis</a>
<a href="suivi-colis.php">Suivi Colis</a>
<a href="logout.php">Logout</a>
</div>

<div class="main-content">

<div class="header">
<h1>Liste Colis</h1>
</div>

<table>

<tr>
<th>Numero</th>
<th>Expediteur</th>
<th>Destinataire</th>
<th>Telephone</th>
<th>Depart</th>
<th>Destination</th>
<th>Statut</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row["numero"]; ?></td>
<td><?php echo $row["expediteur"]; ?></td>
<td><?php echo $row["destinataire"]; ?></td>
<td><?php echo $row["telephone"]; ?></td>
<td><?php echo $row["ville_depart"]; ?></td>
<td><?php echo $row["ville_destination"]; ?></td>
<td><?php echo $row["statut"]; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>
