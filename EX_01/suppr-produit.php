<?php


function connect_to_database(){
$servername = "localhost";
$username = "root";
$password = "root";
$databasename = "BaseTest01";

try {
    $pdo = new PDO ("mysql:host=$servername;dbname=$databasename", $username);
    

    echo "Connected successfully";
    return $pdo;
} catch (PDOException $e){
    echo "Connection failed: ".$e->getMessage();
}
}

connect_to_database();

$pdo =connect_to_database();



$stmt='DELETE FROM produit WHERE nom = "T shirt noir"';
$prepare = $pdo->prepare ($stmt);
$prepare->execute();






?>