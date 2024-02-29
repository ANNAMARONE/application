

<?php


require_once "config.php";


if (isset($_POST['enregistrer'])) {
    $description = $_POST['contenu'];
    $date = $_POST['date_envoie'];
    $catégorie = $_POST['categorie'];
    $auteur=$_POST['auteur'];
    $titre = $_POST['titre'];
    try {
        // Votre code d'insertion ici
        // ...
        $sql = $conn->exec ("INSERT INTO idée (Contenu,date_envoie,categorie,id_utilisateur,titre)
         VALUES ('$description','$date','$catégorie','$auteur','$titre')");
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
// suprimer une idée

if(isset($_GET['sup'])){
    $id= $_GET['sup'];
    $sql3= "DELETE FROM `idée` WHERE `id`=$id";
    $deleteuruser=$conn->prepare($sql3);
    $deleteuruser->execute();
  
    header("location:création.php");
      exit();
}


$pdoStat=$conn->prepare('SELECT * FROM idée');
$executeok=$pdoStat->execute();
$idée=$pdoStat->fetchAll();



?>;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="idee.css">
    <link rel="stylesheet" href="button.css">
    <title>Document</title>
</head>
<body>
    <h1>liste des idées</h1>
  
    <?php
    foreach($idée as $valeur):?>
<div class="cat">
      <p>titre: <?= $valeur['titre']?></p>  
      <p>le contenu:  <?= $valeur['Contenu']?></p>  
      <p>le catégorie:  <?= $valeur['categorie']?></p>  
      <p>la date: <?= $valeur['date_envoie']?></p>  
      <p>Auteur: <?= $valeur['id_utilisateur']?></p> <br>
      <button class="btnsup"><a href="affichage.php? sup=<?=$valeur['id']?>">
        suprimer</a></button>

        <button><a href="mis_à_jour.php? id=<?=$valeur['id']?>">
        Modifier</a></button>
      </div> 



    <?php endforeach;?>

</body>
</html>