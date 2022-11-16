<!-- 
Mohamed HABBAAINA, le 15 nov 2022    
Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
à la ligne entre chaque nombre (“<br />”).
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
   $nm_premier = [];
   $n = null;
   for ($i=2 ; $i < 100; $i++) {
      echo "pour le nombre $i<br>";
         for ($j=2 ; $j < 100; $j++) {
         if ($i % $j == 0) {
            echo 'c\'est pas un nombre premier<br>';
            break;
         } elseif ($i == $j) {
            break;
         }
          else {
            // echo "$i est un nombre premier<br>";
            $n = $i;
            $nm_premier[] = $n;

         } 

      }
      print_r($nm_premier);
   }




      // for ()
      //       for ($i = 2; $i < 100; $i++)
      //       {
      //           if($num % $i == 0)
      //               return false;
      //       }
      //       return true;
         


      //    for($i = $input; $i > 0; $i--)
      //    {
      //       if(Prime($i))
      //           echo $i;
         
      //       if(Prime($i))
      //           exit();
      //    }





 ?>
 </body>
 </html>