<?php
session_start();
require_once("config/database.php");

$colis=null;

if(isset($_POST["numero"])){

$result=mysqli_query($conn,"SELECT * FROM colis WHERE numero='".$_POST["numero"]."'");
$colis=mysqli_fetch_assoc($result);

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
<h1>Suivi Colis</h1>
</div>

<form method="POST">

Numero colis
<input type="text" name="numero">

<button type="submit">Rechercher</button>

</form>

<?php if($colis){ ?>

<div class="card blue">

Numero : <?php echo $colis["numero"]; ?><br>
Statut : <?php echo $colis["statut"]; ?><br>
Destination : <?php echo $colis["ville_destination"]; ?>

</div>

<?php } ?>

</div>

</body>
</html>
