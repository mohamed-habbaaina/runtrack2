<!-- 
    ***     Mohamed HABBAAINA, le 17 nov 2022       ***

Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”.
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

 <form method="GET" style="display: flex; flex-direction : column; width: 200px; margin: 30px; border : 2px dashed black; padding: 10px">              
      <label for="name">Prénom :</label>
      <input type="text" name="name" id="name">

      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password">

      <input type="submit" value="Envoyer"/>
</form>
 <?php

?>
</body>
</html>