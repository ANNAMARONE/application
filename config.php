<?php
/*$server = "localhost:81";
$user = "root";
$mdp = "";
$dbname="Boîte_dialogue";
try {
$conn = new PDO("mysql:host=$server,dbname=$dbname", $user, $mdp);
// Définir le mode d'erreur PDO comme l'exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
}catch(PDOException $e){
echo "Connection failed: " . $e->getMessage();
}*/
//la connection a la base de donnees
$servername = "localhost:3307";
$username = "root";
$password = '';
$dbname = 'Boîte_dialogue';

try {
    $conn = new PDO("mysql:host=$servername ; dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) { 
    echo "la connection a echoué: ". $e->getMessage();
}


?>