<!-- 
    ***     Mohamed HABBAAINA, le 16 nov 2022       ***

Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
Ex. : IoyaeIaaiIaoa
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
$str = 'I\'m sorry Dave I\'m afraid I can\'t do that';

// $long = strlen($str);
// echo $long. '<br>';

$long = 0;
$i=0;
while (isset($str[$i]) == true) {   // Pour calculé la langueure de la chaine du caractere.
   $long = $long + 1;
   $i = $i +1;
}
for ($i = 0; $i < $long; $i++) {
   if ($str[$i] == 'a') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'e') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'i') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'u') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'A') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'E') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'I') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'U') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'o') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'O') {
         $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'y') {
      echo "$str[$i]";
   }
   elseif ($str[$i] == 'Y') {
      echo "$str[$i]";
   }
}

?>
</body>
</html>