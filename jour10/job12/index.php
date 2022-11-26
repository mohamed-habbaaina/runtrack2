<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez le prénom, le nom et la date de naissance des étudiants qui sont nés
entre 1998 et 2018. Affichez le résultat de cette requête dans un tableau html. La
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

// requete pour recupérer les données "étudiants qui sont nés entre 1998 et 2018" 
$requ = $connection->query("SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31';");
?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job 10</title>
 </head>
 <body>
   <h1>Les étudiants qui sont nés entre 1998 et 2018</h1>
    <table>
      <thead>
         <th>prenom</th>
         <th>nom</th>
         <th>naissance</th>
      </thead>
      <tbody>
      <?php
         while(($capacite_between = $requ->fetch_array()) != null){
               echo '<tr>';
               echo '<td>' . $capacite_between['prenom'] . '</td>';
               echo '<td>' . $capacite_between['nom'] . '</td>';
               echo '<td>' . $capacite_between['naissance'] . '</td>';
            }
          ?>
      </tbody>
    </table>     
 </body>
 </html>