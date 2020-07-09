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



$users=$pdo->query("UPDATE `produit` SET `quantite` = 1 WHERE `id` = 4");



?>