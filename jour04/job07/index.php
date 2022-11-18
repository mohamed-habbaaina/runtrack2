<!-- 
    ***     Mohamed HABBAAINA, le 17 nov 2022       ***

Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :
 -->
 <pre><?php
//  $t_0 =[];
//  $t_1 =[];
// for ($i=0; $i < $_POST['largeur'] ; $i++){
//    $t_0[] = '_ ';
//    $t_1[] = ' ';
// }
// for ($i=0; $i < $_POST['largeur'] ; $i++){
//    if($i == 0 || $i == ($_POST['largeur']-1)){
//       for ($i=0; $i < $_POST['largeur'] ; $i++){
//          echo "<pre>$t_0[$i]</pre><br>";
//       }
      
//    } else {
//       for ($i=0; $i < $_POST['largeur'] ; $i++){
//          echo "<pre>$t_1[$i]</pre><br>";
//       }
//    }

// }
$l = $_POST['largeur'];
$h = $_POST['hauteur'];
for ($tr = 0; $tr<(($l/2)+1); $tr++){      // La partie gauche du triangle.
   echo '_';   
} echo '/'.'<br>';
for ($n =0; $n<$l; $n++){              // La partie droite du triangle.
   echo '_'.'_';
} echo '\\'.'<br>';
for ($i =$h; $i<(2*$h); $i++){         // Le carré
   for ($j =0; $j<$l; $j++){
      if ($j == 0 || $j == ($l-1)){
         echo "|";
      }
      // for ($j=1; $j<($l-1); $j++)
      else{
         echo ' ';
      }
   }
   echo '<br>';

}



?></pre>
  <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
<form method="POST" style="display: flex; flex-direction : column; width: 200px; margin: 30px; border : 2px dashed black; padding: 10px">              
      <label for="largeur">Largeur :</label>
      <input type="text" name="largeur" id="largeur">

      <label for="hauteur">Hauteur :</label>
      <input type="text" name="hauteur" id="hauteur">

      <input type="submit" value="Envoyer"/>
</form>
</body>
</html>