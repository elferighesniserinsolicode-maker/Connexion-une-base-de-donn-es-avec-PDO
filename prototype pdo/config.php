<?php
$host='localhost';
$dbname='gestion_produits';
$username='root';
$password='';
try{
    $pdo= new pdo ("mysql:host=$host;dbname=$dbname",$username,$password);
    $pdo->setAttribute(pdo::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    ECHO" erreur connexion " . $e->getMessage();
}
?>