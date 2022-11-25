<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez l’ensemble des informations des salles en les triant par capacité
croissante. Affichez le résultat de cette requête dans un tableau html. La première ligne
de votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir
les données présentes dans votre base de données.
 -->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jour09';

// Ce connecter a la base de données "jour09"
$connection = new mysqli($servername, $username, $password, $database);

// requete pour recupérer les données "salles par capacité croissante" 
$requ = $connection->query("SELECT * FROM `salles` ORDER BY capacite ASC;");
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
   <h1>Base de données salles par capacité croissante</h1>
    <table>
      <thead>
         <th>id</th>
         <th>nom</th>
         <th>id_etage</th>
         <th>capacité</th>
      </thead>
      <tbody>
      <?php
         while(($capacite_croissante = $requ->fetch_array()) != null){
               echo '<tr>';
               echo '<td>' . $capacite_croissante['id'] . '</td>';
               echo '<td>' . $capacite_croissante['nom'] . '</td>';
               echo '<td>' . $capacite_croissante['id_etage'] . '</td>';
               echo '<td>' . $capacite_croissante['capacite'] . '</td>';
            }
          ?>
      </tbody>
    </table>  
 </body>
 </html>