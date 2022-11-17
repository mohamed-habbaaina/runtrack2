<!-- 
    ***     Mohamed HABBAAINA, le 17 nov 2022       ***

Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :
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

 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>                    <!-- Le formulaire -->
<form method="GET" style="display: flex; flex-direction : column; width: 200px; margin: 30px; border : 2px dashed black; padding: 10px">              
      <label for="name">Prénom :</label>
      <input type="text" name="name" id="name">

      <label for="age">Age :</label>
      <input type="number" name="age" id="age">

      <label for="email">Email :</label>
      <input type="email" name="email" id="email">

      <input type="submit" value="Envoyer"/>
</form>

<table style="display: flex; flex-direction : column; width: 200px; margin: 30px; border : 2px dashed black; padding: 10px">
   <thead>
      <th>Argument</th>
      <th>Valeur</th>
   </thead>
   <tbody>
   <?php 

   foreach ($_GET as $cles => $val){?>


      <tr><td>$cles</td><br>
      <td>$val</td></tr>
   <?php 
   }
   ?>
   </tbody>
</table>

</body>
</html>