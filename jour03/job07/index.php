<!-- 
    ***     Mohamed HABBAAINA, le 16 nov 2022       ***

Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c
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
$str = 'Certaines choses changent, et d\'autres ne changeront jamais.';
$long = 0;
$i=0;
while (isset($str[$i]) == true) {   // Pour calculé la langueure de la chaine du caractere.
   $long = $long + 1;
   $i = $i +1;
} echo "$str <br>";
$str_2 = [];                  // La nouvelle chaine $str.

// echo $long;
for ($i = 0; $i < $long; $i++) {
    $str_2[$i] = $str[($i +1)];
 }  //echo $str;
 $str_2[$long] = $str[0];
 //print_r($str_reverse);
 foreach($str_2 as $str_02) {
   echo $str_02;                   // L'affichage de la nouvelle chaine.
 }
?>
</body>
</html>