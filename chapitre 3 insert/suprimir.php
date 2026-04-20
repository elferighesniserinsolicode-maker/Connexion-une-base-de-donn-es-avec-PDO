<?php
require 'config.php';
if (isset($_GET['nom']) && isset($_GET['email'])) {
    $nom = $_GET['nom'];
    $email = $_GET['email'];
    $stmt = "DELETE FROM utilisateurs WHERE id=:id";
    $stmt = $pdo->prepare($stmt);
    $stmt->execute(["id"=>$id]);
}else{
    echo "id non trove ";
}

    