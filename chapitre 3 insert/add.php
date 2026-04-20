<?php
require 'config.php';
$stmt = "INSERT INTO utilisateurs
(nom,email)value(:nom,:email)";
$stmt = $pdo->prepare($stmt);

if (isset($_POST['add'])) {
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    if (empty($email)||empty($nom)) {
        echo "les champs vide";
    }else{
        $stmt->execute(
        ["nom"=>$nom,"email"=>$email]
        );
    }
}

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST"></form>
    <label>NOM</label>
    <input type="txet">
    <label for="">email</label>
    <input type="text">
    <button type="submit" name="add"> add</button>

    </form>

</body>

</html>