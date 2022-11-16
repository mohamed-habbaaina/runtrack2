<!-- 
    ***     Mohamed HABBAAINA, le 16 nov 2022       ***

Créez une variable de type string nommée $str et affectez y le texte :
“Les choses que l'on possède finissent par nous posséder."
Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL
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
   $str= 'Les choses que l\'on possède finissent par nous posséder.';
   $long = 0;
   $i=0;
   while (isset($str[$i]) == true) {   // Pour calculé la langueure de la chaine du caractere.
      $long = $long + 1;
      $i = $i +1;
   }
   $str_reverse = [];                  // Le reverse de la chaine $str.
   // echo $long;
   for ($i = 0; $i < $long; $i++) {
       $str_reverse[$i] = $str[($long - $i -1)];
    }  //echo $str;
    //print_r($str_reverse);
    foreach($str_reverse as $str_rev) {
      echo $str_rev;                   // L'affichage du reverse.
    }
   ?>
</body>
</html>