<?php
session_start();
require_once("config/database.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin123") {

        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Nom ou mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Connexion - JUDI TRANSPORT</title>
</head>
<body>

<h2>Connexion JUDI TRANSPORT</h2>

<?php if($error) echo $error; ?>

<form method="POST">
    Username:<br>
    <input type="text" name="username"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    <button type="submit">Se connecter</button>
</form>

</body>
</html>
