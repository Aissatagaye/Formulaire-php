<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <h1>Entrer vos cordonnées</h1>
    <?php
                      
                      if(isset($_POST['send'])){
                          $Age = $_POST['Age'];
                          $Adresse = $_POST['Adresse'];
                          $Nom = $_POST['Nom'];
                          $Prenom = $_POST['Prénom'];
                          $Contact = $_POST['Téléphone'];
                          $Message = $_POST['message'] ; 
                          $sender = "aissatagaye199@gmail.com";
                          $object ="Message";
                          $header = "content-type: text/html";
                           
                          if(empty( $Age)|| empty( $Adresse)|| empty($Nom)|| empty($Prenom)||empty($Contact)|| empty($Message)){
                        
                                  echo "les champs doivent etre saisis";
                    
                          }else{
                              if(mail($sender,$object,$Message,$header)){
                                  
                                      echo "Tes donnees ont ete envoyé avec succés à $sender";
                                
                                
                              }else{
                
                                 
                                       echo "echec d'envoie! veuillez verifier les données entrées" ;
                              
                    
                              }
                          }

                      }
                     ?>
        <section>
            <div class="container">
                <form action=""  method="POST">
    
                    <div class="form">
                        <label for="Prénom">Prénom</label>
                        <input type="text" id="Prénom" name="Prénom">
                    </div>
    
                    <div class="form">
                        <label for="Nom">Nom</label>
                        <input type="text" id="Nom" name="Nom">
                    </div>
    

                    <div class="form">
                        <label for="Adresse">Adresse</label>
                        <input type="text" id="Adresse" name="Adresse">
                    </div>
                    <div class="form">
                        <label for="Age">Age</label>
                        <input type="text" id="Age" name="Age">
                    </div>
                    <div class="form">
                        <label for="Téléphone">Téléphone</label>
                        <input type="tel" id="Téléphone" name="Téléphone">
                    </div>
    
                    <div class="form">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="10" maxlength="200"></textarea>
                    </div>
    
                    <button type="submit" id="form-submit" name= "send">Envoyer</button>
                </form>
            </div>
            <div id="status"></div>
        </section>
    
    </div>
    
</body>
</html>