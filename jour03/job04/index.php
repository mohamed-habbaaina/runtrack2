<!-- 
    ***     Mohamed HABBAAINA, le 16 nov 2022       ***

Créez une variable de type string nommée $str et affectez y le texte :
“Dans l'espace, personne ne vous entend crier”.
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne.
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
$str = 'Dans l\'espace, personne ne vous entend crier';
$long = 0;
$i=0;
while (isset($str[$i]) == true) {   // Pour calculé la langueure de la chaine du caractere.
   $long = $long + 1;
   $i = $i +1;
}
echo "Le nombre total de la chaine est: $long<br>";
$j =0;
for ($i = 0; $i < $long; $i++) {
   if ($str[$i] == " ") {           // Pour enlevé (vergules, espace,,,etc). 
      $j = $j +1;
   }
   if ($str[$i] == ".") {
      $j = $j +1;
   }
   if ($str[$i] == ",") {
      $j = $j +1;
   }
   if ($str[$i] == "\'") {
      $j = $j +1;
   }
}
echo 'Le nombre de caractères présents dans cette chaîne est: '. ($long - $j);   // Le resultat final

?>
</body>
</html>