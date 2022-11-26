<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez récupérer le nom des salles et le nom de leur étage. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
doit contenir le nom des champs. Les suivantes doivent contenir les données présentes
dans votre base de données.
 -->
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jour09';

// Ce connecter a la base de données "jour09"
$connection = new mysqli($servername, $username, $password, $database);

// requete pour recupérer les données "le nom des salles et le nom de leur étage" 
$requ = $connection->query("SELECT `nom` FROM `salles` UNION SELECT `nom` FROM `etage`;");
?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job 13</title>
 </head>
 <body>
   <h1>Le nom des salles et le nom de leur étage</h1>
    <table>
      <thead>
         <th>nom</th>
      </thead>
      <tbody>
      <?php
      $capacite_FROM = $requ->fetch_all();
      // echo '<pre>';
      // var_dump($capacite_FROM);
      // echo '</pre>';
      for ($i =0; $i < 8; $i++){
           echo '<tr>';
           echo '<td>' . $capacite_FROM[$i][0] . '</td>';
      }
      ?>
      </tbody>
    </table>     
 </body>
 </html>