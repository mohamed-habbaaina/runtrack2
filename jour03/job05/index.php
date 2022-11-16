<!-- 
    ***     Mohamed HABBAAINA, le 16 nov 2022       ***

Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
“Consonnes”..
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
$str = 'On n’est pas le meilleur quand on le croit mais quand on le sait';

$voyelles = [];
$consonnes = [];
$long = 0;
$i=0;
while (isset($str[$i]) == true) {   // Pour calculé la langueure de la chaine du caractere.
   $long = $long + 1;
   $i = $i +1;
}
for ($i = 0; $i < $long; $i++) {

   if ($str[$i] == 'a') {           // Creation du tableau pour les voyelles.
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'e') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'i') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'u') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'A') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'E') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'I') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'U') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'o') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'O') {
         $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'y') {
      $voyelles[] = $str[$i];
   }
   elseif ($str[$i] == 'Y') {
      $voyelles[] = $str[$i];
   }

   else {
   if ($str[$i] != " ") {           // Pour enlevé (vergules, espace,,,etc). 
      $consonnes[] = $str[$i];
   }
   elseif ($str[$i] != ".") {
      $consonnes[] = $str[$i];
   }
   elseif ($str[$i] != ",") {
      $consonnes[] = $str[$i];
   }
   elseif ($str[$i] != "\'") {
      $consonnes[] = $str[$i];
   }
   }
}
// }    var_dump ($voyelles);
//    echo '<br><br><br>';
//    var_dump ($consonnes);

?>
<table style="border: 3mm ridge #191970	;">   <!-- Tableu HTML plus style Border -->

   <thead>
      <tr>
         <th>Voyelles</th>
         <th>Consonnes</th>
      </tr>
   </thead>
   <tbody>
      <td>
      <?php
         foreach($voyelles as $voyelle){
            echo $voyelle . ' ';
         }
      ?>
      </td>
      <td>
      <?php
         foreach($consonnes as $consonne){
            echo $consonne . ' ';
         }
      ?>
      </td>
   </tbody>
</table>
</body>
</html>