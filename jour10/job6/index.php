<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez le nombre total d’étudiants dans une colonne nommée “nb_etudiants”.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom du champ.
 -->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jour09';

// Ce connecter a la base de données "jour09"
$connection = new mysqli($servername, $username, $password, $database);

// requete pour recupérer les données "les étudiants qui ont moins de 18 ans" 
$requ = $connection->query("SELECT COUNT(*) FROM etudiants;");
$nb_etud = $requ->fetch_all();
// echo '<pre>';
// var_dump($nb_etud);
// echo '</pre>';
?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job 06</title>
 </head>
 <body>
    <table>
      <thead><th>nb_etudiants</th></thead>
      <tbody><td><?php echo $nb_etud[0][0]; ?></td></tbody>
    </table>
 </body>
 </html>