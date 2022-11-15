<!-- 
Mohamed HABBAAINA, le 15 nov 2022    
Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
(<br />).
Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
et 50 : souligner.
Afficher “La Plateforme_” à la place de 42.
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <?php
   for ($i = 0; $i <= 100; $i++) {
      if ($i >= 0 && $i <= 20) {
         echo "<i>$i</i><br>";   // Pour l'ecriture italique
      }
      elseif ($i >= 25 && $i <= 50) {
         echo "<u>$i</u><br>";   //    pour souligner
      }
      else {
         echo "$i<br>";
      }

   }
 ?>
 </body>
 </html>