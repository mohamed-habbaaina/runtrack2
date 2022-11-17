<!-- 
    ***     Mohamed HABBAAINA, le 17 nov 2022       ***

Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument POST envoyé est : “
 -->
 <?php 
   $long = 0;
                              // Pour calculé la langueure de la chaine du caractere.
   foreach ($_POST as $var){
      $long = $long + 1;
   }
   echo"Le nombre d’argument POST envoyé est :   $long <br>";
 ?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>                    <!-- Le formulaire -->
<form method="POST" style="display: flex; flex-direction : column; width: 200px; margin: 30px; border : 2px dashed black; padding: 10px">              
      <label for="name">Prénom :</label>
      <input type="text" name="name" id="name">

      <label for="age">Age :</label>
      <input type="number" name="age" id="age">

      <label for="email">Email :</label>
      <input type="email" name="email" id="email">

      <input type="submit" value="Envoyer"/>
</form>
</body>
</html>