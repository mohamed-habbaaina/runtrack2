<!-- 
Mohamed HABBAAINA, le 22 nov 2022

Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération.
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
    function calcule($a, $operation, $b){
      if ($operation == '+'){
         return ($a + $b);
      }
      if ($operation == '-'){
         return ($a - $b);
      }
      if ($operation == '*'){
         return ($a * $b);
      }
      if ($operation == '/'){
         return ($a / $b);
      }
      if ($operation == '%'){
         return ($a % $b);
      }
   }
    $a = 12;
    $operation = '*';
    $b = 3;
    $x = calcule($a, $operation , $b);
    echo $x;
 ?>
 </body>
 </html>