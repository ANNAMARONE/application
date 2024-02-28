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
                    
                    
                    <form action="affichage.php" method="post">
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
                            <input type="text" name="titre" class="form-control">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>Contenu</label><br>
                            <textarea name="contenu" cols="30" rows="10" class="form-control" name="titre"></textarea>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>date</label>
                            <input type="date" name="date_envoie" class="form-control ">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>heure</label>
                            <input type="TIME" name="heure" class="form-control ">
                            <span class="invalid-feedback"></span>
                        </div>
                        <button class="btn2" type="submit" name="enregistrer">Enregistrer</button>
                        <a href="index.php" class="btn5">Annuler</a>
                        </div>
                        </div>
                    </form>
                 
                    
</body>
</html>