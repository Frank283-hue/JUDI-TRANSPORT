<?php
session_start();
require_once("config/database.php");

$message="";

if(isset($_POST["numero"])){

$sql="INSERT INTO colis(numero,expediteur,destinataire,telephone,ville_depart,ville_destination,statut)
VALUES(
'".$_POST["numero"]."',
'".$_POST["expediteur"]."',
'".$_POST["destinataire"]."',
'".$_POST["telephone"]."',
'".$_POST["ville_depart"]."',
'".$_POST["ville_destination"]."',
'".$_POST["statut"]."'
)";

mysqli_query($conn,$sql);
$message="Colis ajouté avec succès";
}
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
<h1>Ajouter Colis</h1>
</div>

<form method="POST">

Numero
<input type="text" name="numero">

Expediteur
<input type="text" name="expediteur">

Destinataire
<input type="text" name="destinataire">

Telephone
<input type="text" name="telephone">

Ville depart
<input type="text" name="ville_depart">

Ville destination
<input type="text" name="ville_destination">

Statut
<select name="statut">
<option value="en_attente">En attente</option>
<option value="en_transit">En transit</option>
<option value="livre">Livre</option>
</select>

<button type="submit">Ajouter</button>

</form>

<?php echo $message; ?>

</div>

</body>
</html>
