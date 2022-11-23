<!-- 
Mohamed HABBAAINA, le 23 nov 2022

Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexion.
 -->
<?php
session_start();
$_SESSION['prenom'] = $_GET['prenom'];
$prenom = $_GET['prenom'];

// if (isset($_GET['reset'])){
//     $_SESSION['prenom'] = null;
// }
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
<?php
// if (isset($_GET['deconnexion'])){
//     $_COOKIE['prenom'] = null;
// }
if ($_COOKIE['prenom'] == $_GET['prenom']){
    echo "Bonjour $prenom";
}
else { 
?>
<form action="" method="get">
    <label for="prenom" >prénom</label>
    <input type="text" name="prenom" id="prenom">

    <button type="submit" name="connexion">Connexion</button>

</form>
<?php   }
?>
    <button type="submit" name="deconnexion">Déconnexion</button>
<?php
setcookie('prenom', "$prenom", time()+60*60);
?>
</body>
</html>