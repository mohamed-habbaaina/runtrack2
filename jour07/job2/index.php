<!-- 
Mohamed HABBAAINA, le 22 nov 2022

Créez une fonction nommée “bonjour($jour)”.
Cette fonction prend en paramètre un booléen nommé “$jour”.
● Si le paramètre “$jour” vaut true, la fonction doit afficher : “Bonjour”,
● Si le paramètre “$jour” vaut false, la fonction doit afficher : “Bonsoir”.
 -->
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <?php
    function bonjour($jour){
      if ($jour == true){
         echo 'Bonjour';
      }
      if ($jour == false){
         echo 'Bonsoir';
      }
    }
    bonjour(true);
    ?>
 </body>
 </html>