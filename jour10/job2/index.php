<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez le nom et la capacité de chacune des salles. Affichez le résultat
de cette requête dans un tableau html. La première ligne de votre tableau html doit
contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données.
 -->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jour09';

// Ce connecter a la base de données "jour09"
$connection = new mysqli($servername, $username, $password, $database);

// requete pour recupérer les données
$requ = $connection->query("SELECT `nom`, `capacite` FROM `salles`");

// requete pour pour "fetch" les données
$result_fetch_salles = $requ->fetch_all();
// echo '<pre>';
// var_dump($result_fetch_salles);
// echo '</pre>';
?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>job 02</title>
 </head>
 <body>
    <h1>La base de données "salles"</h1>
    <table>
      <thead>
         <th><?php echo 'Nom' ?></th>
         <th><?php echo 'Capacité' ?></th>
      </thead>
      <tbody>
         <tr>
            <td><?php print_r($result_fetch_salles[0][0]); ?></td>
            <td><?php print_r($result_fetch_salles[0][1]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_salles[1][0]); ?></td>
            <td><?php print_r($result_fetch_salles[1][1]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_salles[2][0]); ?></td>
            <td><?php print_r($result_fetch_salles[2][1]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_salles[3][0]); ?></td>
            <td><?php print_r($result_fetch_salles[3][1]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_salles[4][0]); ?></td>
            <td><?php print_r($result_fetch_salles[4][1]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_salles[5][0]); ?></td>
            <td><?php print_r($result_fetch_salles[5][1]); ?></td>
         </tr>

      </tbody>
    </table>
 </body>
 </html>