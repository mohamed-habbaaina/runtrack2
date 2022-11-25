<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez dans une colonne nommée “capacite_totale” la somme des capacités
des salles. Affichez le résultat de cette requête dans un tableau html. La première ligne
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

// requete pour recupérer les données "la somme des capacités des salles" 
$requ = $connection->query("SELECT SUM(capacite) FROM `salles`;");
$capacite_totale = $requ->fetch_all();
// echo '<pre>';
// var_dump($capacite_totale);
// echo '</pre>';
?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job 08</title>
 </head>
 <body>
    <table>
      <thead><th>capacite_totale</th></thead>
      <tbody><td><?php echo $capacite_totale[0][0]; ?></td></tbody>
    </table>    
 </body>
 </html>