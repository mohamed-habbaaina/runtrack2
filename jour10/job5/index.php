<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données.
 -->
 <!-- SELECT * FROM `etudiants` WHERE naissance < '2004-11-24'; -->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jour09';

// Ce connecter a la base de données "jour09"
$connection = new mysqli($servername, $username, $password, $database);

// requete pour recupérer les données "les étudiants qui ont moins de 18 ans" 
$requ = $connection->query("SELECT `prenom`, `nom`, `naissance`, `sexe`, `email` FROM `etudiants` WHERE naissance > '2004-11-24';");
?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job5</title>
 </head>
 <body>
<table>
   <thead>
   <th>Prenom</th>
   <th>Nom</th>
   <th>naissance</th>
   <th>sexe</th>
   <th>email</th>
   </thead>
   <tbody>
   <?php
   while(($result_fetch_job5 = $requ->fetch_array()) != null){
   // echo '<pre>';
   // var_dump($result_fetch_job5);
   // echo '</pre>';
      echo '<tr>';
      echo '<td>' . $result_fetch_job5['prenom'] . '</td>';
      echo '<td>' . $result_fetch_job5['nom'] . '</td>';
      echo '<td>' . $result_fetch_job5['naissance'] . '</td>';
      echo '<td>' . $result_fetch_job5['sexe'] . '</td>';
      echo '<td>' . $result_fetch_job5['email'] . '</td>';
}
?>
   </tbody>
</table>
</body>
 </html>