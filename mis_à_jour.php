

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

    // $getData=$_POST;
    // if(isset($getData['contenu'])||!isset( $getData['titre'] )){

    //     echo'<h1>idée</h1>';
    //     echo"<p><b>Titre</b> : " .$_POST['titre'];
    //     echo"<p><b>Contenu</b> :" .$_POST['contenu'];
        
    //     echo"<p><b>Date</b> : " .$_POST['date_envoie'];
    //     echo"<p><b>heure</b> :" .$_POST['heure'];
    //     echo"<p><b>catégorie</b> : " .$_POST['catégorie'];
    
    // }

$pdoStat=$conn->prepare('SELECT * FROM idée');
$executeok=$pdoStat->execute();
$idée=$pdoStat->fetchAll();



?>;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="idée.css">
    <title>Document</title>
</head>
<body>
    <h1>liste des idées</h1>
  
    <?php
    foreach($idée as $valeur):?>
<div class="cat">
    <a href="">
      <p>titre: <?= $valeur['titre']?></p>  
      <p>le contenu:  <?= $valeur['Contenu']?></p>  
      <p>le catégorie:  <?= $valeur['categorie']?></p>  
      <p>la date: <?= $valeur['date_envoie']?></p>  
      <p>envoyer par l'utilisateur N°: <?= $valeur['id_utilisateur']?></p> <br>
      </a>
      </div> 
    <?php endforeach;?>
  
</body>
</html>