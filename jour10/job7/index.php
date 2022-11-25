<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez la superficie totale des étages dans une colonne nommée
“superficie_totale”. Affichez le résultat de cette requête dans un tableau html. La
première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
doivent contenir les données présentes dans votre base de données.
 -->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jour09';

// Ce connecter a la base de données "jour09"
$connection = new mysqli($servername, $username, $password, $database);

// requete pour recupérer les données "La superficie total" 
$requ = $connection->query("SELECT SUM(superficie) FROM `etage`;");
$nb_superficie = $requ->fetch_all();
// echo '<pre>';
// var_dump($nb_superficie);
// echo '</pre>';
?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job 07</title>
 </head>
 <body>
    <table>
      <thead><th>superficie_totale</th></thead>
      <tbody><td><?php echo $nb_superficie[0][0]; ?></td></tbody>
    </table>
 </body>
 </html>