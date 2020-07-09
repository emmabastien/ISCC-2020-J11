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


$stmt = $pdo->prepare("INSERT INTO produit (id, nom, description, prix, quantite) VALUES (:id, :nom, :description, :prix, :quantite)");
$stmt->bindParam(':id',$id);
$stmt->bindParam(':nom',$nom);
$stmt->bindParam(':description',$description);
$stmt->bindParam(':prix',$prix);
$stmt->bindParam(':quantite',$quantite);


$id = 8;
$nom = 'T shirt noir';
$description = 'T shirt coton de couleur noire';
$prix = 15.50;
$quantite = 10;

$stmt->execute();
?>