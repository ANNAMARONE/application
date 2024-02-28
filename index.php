
<?php
include("config.php");


$getData=$_POST;
if(!isset($getData['Mot_de_passe'])||!isset( $getData['adresse_email'] )){
   
}
else{
    echo'<h1>inscrition réussi avec suuccé!</h1>';
    
}
?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boît de Dialogue</title>
</head>
<body>
<header>
    <div class="connecter">
       
    <button class="btnconnex" type="button">

    <a href="connection.php">Se connecter</a>
    </button>
    </div>
    <img src="inno.png" alt="" class="inno">
    <div class="log">BOÎTE A IDÉE</div>
   
</header>
<form action="connection.php" method="post" class="from1">
    <fieldset>
    <legend>FORMULAIRE D'INSCRIPTION</legend>
    <label for="prenom">PRENOM</label><br>
    <input type="text"  name="Prenom" class="input1"> <br>

    <label for="nom">NOM</label><br>
    <input type="text"   name="Nom" class="input1"><br>

    <label for="numero">Numéro de téléphone</label><br>
    <input type="number"  name="numéro_téléphone" class="input1"><br>

    <label for="email">Adresse e-mail</label><br>
    <input type="text"   name="adresse_email" class="input1"><br>

    <label for="pwd">Mot de passe</label><br>
    <input type="password"  name="Mot_de_passe" class="input1"><br>

    <button class="btn1" type="submit" name="envoyer">envoyer</button>

    </fieldset>

  

</form>
</body>



</html>


