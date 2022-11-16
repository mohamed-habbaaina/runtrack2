<!-- 
    ***     Mohamed HABBAAINA, le 16 nov 2022       ***

Créez une variable de type string nommée $str et affectez y le texte :
“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
Parcourir cette chaîne en affichant seulement un caractère sur deux.
Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.
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
$str = 'Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.';

// $long = strlen($str);            // Pour verifier les resultats de la boucle while.
// echo $long. '<br>';

$long = 0;
$i=0;
while (isset($str[$i]) == true) {   // Pour calculé la langueure de la chaine du caractere.
   $long = $long + 1;
   $i = $i +1;
}

for ($i =0; $i < $long; $i++) {
   if ($i % 2 == 0) {               // Pour afficher que les caractere impaire.  
      echo $str[$i];
   }
}

// foreach ($str as $clef => $letr) {
//    if ($clef %2 ==0) {
//       echo $letr;
//    }
// }
?>
</body>
</html>