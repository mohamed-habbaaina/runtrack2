<!-- 
Mohamed HABBAAINA, le 22 nov 2022

Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules).
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
    function leetSpeak($str){
      $i =0;
      while(isset($str[$i])){
         if ($str[$i] == 'A'|| $str[$i] == 'a'){   // Remplacer le 'a' par 4.
            $str[$i] = 4;
         }
         if ($str[$i] == 'B'|| $str[$i] == 'b'){   // // Remplacer le 'a' par 8.
            $str[$i] = 8;
         }
         if ($str[$i] == 'E'|| $str[$i] == 'e'){
            $str[$i] = 3;
         }
         if ($str[$i] == 'G'|| $str[$i] == 'g'){
            $str[$i] = 6;
         }
         if ($str[$i] == 'L'|| $str[$i] == 'l'){
            $str[$i] = 1;
         }
         if ($str[$i] == 'S'|| $str[$i] == 's'){
            $str[$i] = 5;
         }
         if ($str[$i] == 'T'|| $str[$i] == 't'){
            $str[$i] = 7;
         }
         $i++;
      }
      return $str;
    }
    $str ='Mieux vaut mourir incompris que passer sa vie à s\'expliquer';
    $x = leetSpeak($str);
    echo $x;
    ?>
 </body>
 </html>