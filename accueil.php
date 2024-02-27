<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

                    <?php 
/* Inclure le fichier config */
require_once "config.php";
                    
                    /* select query execution */
                    $sql = "SELECT * FROM utilisateur  ";
                    $result=$conn->query($sql);
                    if(!$result){
                      echo 'vous ne pouvez pas afficher la liste des utilisateur';
                    } else{
                        $nbr_utilisateur=$result->rowCount();
                        ?>
                        <table>
                      
                     <tr>
                           <th>#</th> 
                            <th>Nom</th>
                            <th>prenom</th>
                            <th>numero de téléphone</th>
                           <th>adresse email</th>
                            <th>mot de passe</th>
                       </tr>
               
                           
                                
                              
                                <?php 
                                while($row = $result->fetch(PDO::FETCH_NUM)){
                                    echo "<tr>";
                                       foreach($row as $value){
                                        echo"<td> $value <td>"; 

                                       }
                                    echo "</tr>";
                                }
                                       
                    }
                    $result->closeCursor();
 
                    /* Fermer connection */
                    ?>
                      
                </table>
                    </body>
</html>           