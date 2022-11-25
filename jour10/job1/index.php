<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez l’ensemble des informations de la table etudiants. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données.
 -->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jour09';

// Ce connecter a la base de données "jour09"
$connection = new mysqli($servername, $username, $password, $database);
// echo '<pre>';
// var_dump($connection);
// echo '</pre>';

// requete pour recupérer les données
$requ = $connection->query("SELECT * FROM `etudiants`");
// echo '<pre>';
// var_dump($requ);
// echo '</pre>';
// 
$result_fetch_etudiants = $requ->fetch_all();
// echo '<pre>';
// var_dump($result_fetch_etudiants);
// echo '</pre>';
?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>job 01</title>
 </head>
 <body>
    <h1>La base de données</h1>
    <table>
      <thead>
         <th>id</th>
         <th>prenom</th>
         <th>nom</th>
         <th>naissance</th>
         <th>sexe</th>
         <th>email</th>
      </thead>
      <tbody>
         <tr>
            <td><?php print_r($result_fetch_etudiants[0][0]); ?></td>
            <td><?php print_r($result_fetch_etudiants[0][1]); ?></td>
            <td><?php print_r($result_fetch_etudiants[0][2]); ?></td>
            <td><?php print_r($result_fetch_etudiants[0][3]); ?></td>
            <td><?php print_r($result_fetch_etudiants[0][4]); ?></td>
            <td><?php print_r($result_fetch_etudiants[0][5]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_etudiants[1][0]); ?></td>
            <td><?php print_r($result_fetch_etudiants[1][1]); ?></td>
            <td><?php print_r($result_fetch_etudiants[1][2]); ?></td>
            <td><?php print_r($result_fetch_etudiants[1][3]); ?></td>
            <td><?php print_r($result_fetch_etudiants[1][4]); ?></td>
            <td><?php print_r($result_fetch_etudiants[1][5]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_etudiants[2][0]); ?></td>
            <td><?php print_r($result_fetch_etudiants[2][1]); ?></td>
            <td><?php print_r($result_fetch_etudiants[2][2]); ?></td>
            <td><?php print_r($result_fetch_etudiants[2][3]); ?></td>
            <td><?php print_r($result_fetch_etudiants[2][4]); ?></td>
            <td><?php print_r($result_fetch_etudiants[2][5]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_etudiants[3][0]); ?></td>
            <td><?php print_r($result_fetch_etudiants[3][1]); ?></td>
            <td><?php print_r($result_fetch_etudiants[3][2]); ?></td>
            <td><?php print_r($result_fetch_etudiants[3][3]); ?></td>
            <td><?php print_r($result_fetch_etudiants[3][4]); ?></td>
            <td><?php print_r($result_fetch_etudiants[3][5]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_etudiants[4][0]); ?></td>
            <td><?php print_r($result_fetch_etudiants[4][1]); ?></td>
            <td><?php print_r($result_fetch_etudiants[4][2]); ?></td>
            <td><?php print_r($result_fetch_etudiants[4][3]); ?></td>
            <td><?php print_r($result_fetch_etudiants[4][4]); ?></td>
            <td><?php print_r($result_fetch_etudiants[4][5]); ?></td>
         </tr>
         <tr>
            <td><?php print_r($result_fetch_etudiants[5][0]); ?></td>
            <td><?php print_r($result_fetch_etudiants[5][1]); ?></td>
            <td><?php print_r($result_fetch_etudiants[5][2]); ?></td>
            <td><?php print_r($result_fetch_etudiants[5][3]); ?></td>
            <td><?php print_r($result_fetch_etudiants[5][4]); ?></td>
            <td><?php print_r($result_fetch_etudiants[5][5]); ?></td>
         </tr>
      </tbody>
    </table>
 </body>
 </html>