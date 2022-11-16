<!-- 
    ***     Mohamed HABBAAINA, le 16 nov 2022       ***

Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou “X est
impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
comprises dans ce tableau.
Ex. : 200 est paire
204 est paire
173 est impaire
98 est paire
171 est impaire
404 est paire
459 est impaire
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
$tpaire = [200, 204,173,98,171,404,459];
foreach ($tpaire as $x) {
    if ($x %2 == 0) {
        echo "$x est paire<br>";
    } else {
        echo "$x est impaire<br>";
    }
}
?>
</body>
</html>