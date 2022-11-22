<!-- 
Mohamed HABBAAINA, le 22 nov 2022

Créez une fonction nommée “getHello()”.
Cette fonction doit retourner “Hello LaPlateforme!”.
Appelez cette fonction dans votre page en récupérant sa valeur de retour et affichez-la.
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
    function getHello(){
      return 'Hello LaPlateforme!';
    }
    $x = getHello();
    echo $x;
 ?>
 </body>
 </html>