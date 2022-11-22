<!-- 
Mohamed HABBAAINA, le 22 nov 2022

Créez une fonction nommée “occurrences($str, $char)”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
$str sera : 2
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
  function occurrences($str, $char){
   $i =0;
   $j = 0;
   while (isset($str[$i])){       // Parcurire le tableux $str
      if ($str[$i] == $char){    // Verification de la variable $char
         $j++;                  // Compture pour calculer le nombtre des $char
      }
      $i++;
   }
   return $j;
  } 
  $str = 'Bonjour';
  $char = 'o';
  $x = occurrences($str, $char);
  echo $x;
 ?>
 </body>
 </html>