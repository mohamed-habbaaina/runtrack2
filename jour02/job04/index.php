<!-- 
Mohamed HABBAAINA, le 15 nov 2022    
Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
(“<br />”) et en remplaçant certains nombres par un mot selon les conditions suivantes :
● Si le nombre est un multiple de 3, affichez “Fizz”.
● Si le nombre est un multiple de 5, affichez “Buzz”.
● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.
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
      if ($i % 5 == 0 && $i % 3 == 0) {
         echo 'FizzBuzz<br>'; // multiple de 3 et 5
      }
      elseif ($i % 3 == 0) {
         echo 'Fizz<br>';  // Multiple de 3
      }
      elseif ($i % 5 == 0) {
         echo 'Buzz<br>';  // Multiple de 5
      }
      else {
         echo $i . '<br>';
      }
   }
 ?>
 </body>
 </html>