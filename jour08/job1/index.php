<!-- 
Mohamed HABBAAINA, le 23 nov 2022

Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
 -->
<?php
session_start();
if (isset($_SESSION["newsession"])){        //  Pour verifier la connection.
    $_SESSION["newsession"]++;              //  compteur du nombre de connection.
}
// echo $_SESSION["newsession"];
if (isset($_GET["reset"])){                 //  Si le button "reset" est renvoyer dans la variable "$_GET"
    $_SESSION["newsession"] = 0;            //  donner la valeur "0" au compteur.
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les session</title>
</head>
<body>
<form action="" method="get">
    <label for="connection" name="connection"><?php echo 'Nombre de connexion : ' . $_SESSION["newsession"]?></label>
    <button type="submit" name="reset">reset</button>
</form>    
</body>
</html>