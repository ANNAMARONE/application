
<?php


require_once("config.php");


   


    
    if(isset($_POST['connecter'])){
        $email=$_POST['adresse_email'];
    $mdp=$_POST['Mot_de_passe'];

         
        

        if(!empty($email) || !empty($mdp)){
            $email=htmlspecialchars($_POST['adresse_email']);
        $mdp= htmlspecialchars($_POST['Mot_de_passe']);
        $rep=$conn->prepare("SELECT * FROM utilisateur WHERE adresse_email=? AND Mot_de_passe=?");
        
        $rep->execute(array("adresse_email"=>$email,"Mot_de_passe"=>$mdp));

        if($rep->rowCount()> 0){
            die("");
           echo"bonjou";
            header('location:creation.php');
        } else{
            echo"votre mot de passe est incorrect";
        }
    }
        else{
      
          echo'veuillez compléter tous les champs...';
       
        }
    }

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
    <form action="creation.php" method="POST">
    <fieldset>
        <legend class="legend2">CONNECTEZ VOUS</legend>
        <div class="connB">
            <label for=""> Username</label> <br>
            <input type="email" name="adresse_email" placeholder="nomprenom@gmail.com">
            </div>
            <div class="connB">
                <label for="">Password</label><br>
                <input type="text" name="Mot_de_passe" placeholder="********">
            </div>
           <div>
            <button type="submit" name="connecter" class="btn4">
               Se connecter
            </button>
           </div> 
        </fieldset>
    </form>
    
</body>
</html>



