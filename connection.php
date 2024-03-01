<?php
require_once("config.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="création.php" method="post">
    <fieldset>
        <legend class="legend2">CONNECTEZ VOUS</legend>
        <div class="connB">
            <label for=""> Username</label> <br>
            <input type="text" name="adresse_email" placeholder="nomprenom@gmail.com">
            </div>
            <div class="connB">
                <label for="">Password</label><br>
                <input type="text" name="Mot_de_passe" placeholder="********">
            </div>
           <div>
            <button type="button" name="connecter" class="btn4">
                <a href="">Se connecter</a>
            </button>
           </div> 
        </fieldset>
    </form>
    
</body>
</html>
<?php

//     $email=$_POST['adresse_email'];
//     $mdp=$_POST['Mot_de_passe'];
//     if(empty($email) || empty($mdp )){
// echo"email ou message incorrect";

// }

function connexion($conn,$email,$mdp){
    $rep=$conn->prepare("SELECT * FROM utilisateur WHERE adresse _email=:adresse_email AND Mot_de_passe=:Mot_de_passe");
  
    $rep->bindParam(':adresse_email',$email);
    $rep->bindparam(':Mot_de_passe',$mdp);
    $rep->execute();

    $user=$rep->fetch(PDO::FETCH_ASSOC);
    if($user){
        $_SESSION['utilisateur']=$user;
        return true;
            }else{
                return false;
            }
}
   if($_SERVER["REQUEST_METHOD"]=="POST") {
        if(!isset($_POST["Mot_de_passe"]) && !isset($_POST["Mot_de_passe"])){
            echo"mot de passe";
        }
  
} 



?>