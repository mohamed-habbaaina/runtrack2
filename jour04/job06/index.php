<!-- 
    ***     Mohamed HABBAAINA, le 17 nov 2022       ***

Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”.
 -->
 <?php
if ($_POST['nombre'] % 2 == 0){
   echo 'Nombre pair';
} else{
   echo 'Nombre impair';
}
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
<form method="POST" style="display: flex; flex-direction : column; width: 200px; margin: 30px; border : 2px dashed black; padding: 10px">              
      <label for="nombre">Nombre :</label>
      <input type="text" name="nombre" id="nombre">

      <input type="submit" value="Envoyer"/>
</form>
</body>
</html>