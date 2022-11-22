<!-- 
Mohamed HABBAAINA, le 22 nov 2022

Créez un formulaire <form> qui contient :
● un champ <input> nommé “str” de type “text”,
● une liste déroulante <select> nommée “fonction”
● un bouton <button> submit.
Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option <option> choisie dans la liste déroulante.
Les choix possibles sont :
● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
(qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
chaque caractère d’un nombre égal à “$decalage”.
ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
“c”.
● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”.
 -->
 <?php
function gras($str){
   $majuscule = 'AZERTYUIOPQSDFGHJKLMWXCVBN';   // Creation d'un tableux majuscule.
   for ($i = 0; $i < 26; $i++){
      if ($str[0] == $majuscule[$i]){           // Verification que la premiere lettre de $str est majuscule.
         return strtoupper($str);               // La fonction strtoupper() pour changer $str en majuscule.
      }
   }
}
// $str = 'Marseille';
// $x = gras($str);
// echo $x;

function cesar($str, $decalage){
   $alphab = 'abcdefghijklmnopqrstuvwxyz';         // Creation d'un tableux de l'alphabet
   for ($i=0; isset($str) ; $i++) {                // La premiere boucle pour lire la vaiable $str.
      // echo "$i a\n";
      for ($j=0; $j < 26 ; $j++) {                 // La deuxieme boucle pour lire le tableux alphabet.
         // echo "$j b\n";
         if ($str[$i] == $alphab[$j]){             // trouver l'emplacement de la lettre dans le tableux de l'alphabet.
            $str [$i] = $alphab[($j+$decalage)];   // remplager la lettre par la nouvelle lettre du tableux alphabet + le decalage recupérer de la variable $decalage. 
         // echo "$str[$i] \n";
         }
      }
   }
   return $str;
}
// $str = 'abc';
// $decalage = 4;
// $x = cesar($str, $decalage);
// var_dump($x);




?>
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
    
 ?>
 <form action="GET">
   <label for="<?php $str ?>">str</label>
   <input type="text" name="str">

   <select name="function" id="function">
      <option value="gras">Gras</option>
      <option value="cesar">Cesar</option>
      <option value="plateforme">Plateforme</option>
   </select>
 </form>
 </body>
 </html>