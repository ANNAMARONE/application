<?php
include("config.php");



 ?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
    <title>Create Record</title>
    
    
</head>
<body>
    
    
                    <h2 class="mt-5">CRÉER UNE IDÉE</h2>
                    
<p>Remplir le formulaire pour enregistrer votre idée</p> 
                    
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="création_idée">
                    <div class="catégorie">
                   <img src="idée.png" alt="" >
                    <h3>LISTE DES CATÉGORIE</h3>
                    <input type="checkbox" name="catégorie" >
                    <label for="catégorie">Catégorie numéro un</label> <br>
                    <input type="checkbox" name="catégorie" >
                    <label for="catégorie">Catégorie numéro deux</label><br>
                    <input type="checkbox" name="catégorie" >
                    <label for="catégorie">Catégorie numéro trois</label><br>
                    <input type="checkbox" name="catégorie" >
                    <label for="catégorie">Catégorie numéro quatre</label><br>
                    <input type="checkbox" name="catégorie" >
                    <label for="catégorie">Catégorie numéro cinq</label><br>
                    <input type="checkbox" name="catégorie" >
                    <label for="catégorie">Catégorie numéro six</label><br>
                    <input type="checkbox" name="catégorie" >
                    <label for="catégorie">Catégorie numéro sept</label><br>
                    
                    

                    
        
        </div>
        
        <div class="idée">
        
                        <div class="form-group">
                            <label>titre</label>
                            <input type="text" name="nom" class="form-control">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>description</label><br>
                            <textarea name="ecole" cols="30" rows="10" class="form-control"></textarea>
                            <span class="invalid-feedback"><?php echo $ecole_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>date</label>
                            <input type="date" name="age" class="form-control ">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>heure</label>
                            <input type="TIME" name="age" class="form-control ">
                            <span class="invalid-feedback"><?php echo $age_err;?></span>
                        </div>
                        <button class="btn2" type="submit">Enregistrer</button>
                        <a href="index.php" class="btn5">Annuler</a>
                        </div>
                        </div>
                    </form>
                 
                    
</body>
</html>