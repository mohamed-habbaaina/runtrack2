<!-- 
Mohamed HABBAAINA, le 23 nov 2022

Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.
 -->
<?php
session_start();
$_SESSION['prenom'] = $_GET['prenom'];
echo 'Le prénom de l\'utilisateur est: ' . $_SESSION['prenom'];
if (isset($_GET['reset'])){
    $_SESSION['prenom'] = null;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les sessions</title>
</head>
<body>
<form action="" method="get">
    <label for="prenom" >prénom</label>
    <input type="text" name="prenom" id="prenom">

    <button type="submit" name="reset">reset</button>
</form>    
</body>
</html>