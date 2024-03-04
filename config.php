<?php

$servername = "localhost:3307";
$username = "root";
$password = '';
$dbname = 'Boîte_dialogue';

try {
    $conn = new PDO("mysql:host=$servername ; dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
} catch (PDOException $e) { 
    echo "la connection a echoué: ". $e->getMessage();
}
if(isset($_POST['envoyer'])){
    $nom=$_POST['Nom'];
    $prenom=$_POST['Prenom'];
    $numero=$_POST['numéro_téléphone'];                 
    $email=$_POST['adresse_email'];
    $pwd=$_POST['Mot_de_passe'];
  $sql = $conn->exec("INSERT INTO utilisateur (Nom,Prenom,numéro_téléphone,adresse_email,Mot_de_passe)VALUES('$nom', '$prenom', '$numero', '$email','$pwd')") ;

}


// if (isset($_POST['modifier'])) {
//     $description = $_POST['contenu'];
//     $date = $_POST['date_envoie'];
//     $catégorie = $_POST['categorie'];
//     $auteur=$_POST['auteur'];
//     $titre = $_POST['titre'];

//     try {
//         $sql5="UPDATE idée SET Contenu=:contenu, date_envoie=:date_envoie, categorie=:categorie, id_utilisateur=:auteur, titre=:titre WHERE id=:$id";
//         $statement=$conn->prepare($sql5) ;
//         $data = [
//             'contenu'=>$description,
//             'date_envoie'=>$date,
//             'categorie'=>$catégorie,
//             'auteur'=>$auteur,
//             'titre'=>$titre,

//         ];
//         $statement->execute($data);
// } catch (PDOException $e) {
//     echo "Erreur : " . $e->getMessage();

// }
// }
?>;
