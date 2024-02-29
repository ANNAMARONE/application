


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <link rel="stylesheet" href="idee.css">
    <title>Create Record</title>
    
    
</head>
<body>
    
    
                    
                    <form action="affichage.php" method="post">
                        <fieldset>
                        <h2 class="mt-5">AJOUTER VOS IDÉES </h2>  
                        <div class="idée1">
                    <div class="création_idée">
            <h2>Liste des catégories</h2>
            <input type="checkbox" name="categorie" value="Logiciels et applications">
            <label for="">Logiciels et applications</label><br>
            <input type="checkbox" name="categorie" value="Matériel informatique et périphériques">
            <label for="">Matériel informatique et périphériques</label><br>
            <input type="checkbox" name="categorie" value="Services de cloud computing">
            <label for="">Services de cloud computing</label><br>
            <input type="checkbox" name="categorie" value="Sécurité informatique">
            <label for="">Sécurité informatique</label><br>
            <input type="checkbox" name="categorie" value="Développement de jeux vidéo">
            <label for="">Développement de jeux vidéo</label>
        
        </div>
        
        <div class="idée2">
        
                        <div class="form-group">
                            <label>titre</label>
                            <input type="text" name="titre" >
                           
                        </div>
                        <div class="form-group">
                            <label>Contenu</label><br>
                            <textarea name="contenu" cols="90" rows="10" ></textarea>
                           
                        </div>
                        <div class="form-group">
                            <label>Auteur</label><br>
                            <input type="text" name="auteur">
                            
                        </div>
                        <div class="form-group">
                            <label>date</label><br>
                            <input type="date" name="date_envoie" >
                            
                        </div>
                        <button class="btn2" type="submit" name="enregistrer">Enregistrer</button>
                        <a href="index.php" class="btn5">Annuler</a>
                        </div>
                        </div>
                        </div>
                        </fieldset>
                    </form>
                 
                    
</body>
</html>