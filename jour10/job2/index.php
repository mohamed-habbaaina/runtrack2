<!-- 
Mohamed HABBAAINA le 25/11/2022


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
    
 </body>
 </html>