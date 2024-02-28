<?php
include("config.php");



if (isset($_POST['enregistrer'])) {
    $description = addslashes($_POST['contenu']);
    $date = $_POST['date_envoie'];
    $heure = $_POST['heure'];
    $catégorie = $_POST['catégorie'];
    $titre = $_POST['titre'];
    try {
        // Votre code d'insertion ici
        // ...
        $sql = $conn->exec("INSERT INTO idée (Contenu, date_envoie, heure, catégorie, titre) VALUES ('$description', '$date', '$heure', '$catégorie', '$titre')");
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}

$getData=$_POST;
if(isset($getData['contenu'])||!isset( $getData['titre'] )){

    echo'<h1>idée</h1>';
    echo"<p><b>Titre</b> : " .$_POST['titre'];
    echo"<p><b>Contenu</b> :" .$_POST['contenu'];
    echo"<p><b>Date</b> : " .$_POST['date_envoie'];
    echo"<p><b>heure</b> :" .$_POST['heure'];
    echo"<p><b>catégorie</b> : " .$_POST['catégorie'];
   
}
?>;