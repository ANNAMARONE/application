<?php
include("config.php")
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
                <a href="">connecter</a>
            </button>
           </div> 
        </fieldset>
    </form>
    
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST['adresse_email'];
    $mdp=$_POST['Mot_de_passe'];
    if($email !=="" && $mdp !=""){
        $result=$conn->query("SELECT * FROM utilisateur WHERE adrese _email='$email' AND Mot_de_passe='$mdw'  ");
        $resul=$result->fetch();
        if($resul["id"] != false){
            header('Location: création.php');
        }
       else{
        $error_message=" email ou message incorrecte";
       } 
    }
}



?>