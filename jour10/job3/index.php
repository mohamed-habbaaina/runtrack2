<!-- 
Mohamed HABBAAINA le 25/11/2022

En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez le prenom, le nom et la date de naissance des étudiants de sexe
féminin. Affichez le résultat de cette requête dans un tableau html. La première ligne de
votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
données présentes dans votre base de données.
 -->
 <?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jour09';

// Ce connecter a la base de données "jour09"
$connection = new mysqli($servername, $username, $password, $database);

// requete pour recupérer les données
$requ = $connection->query("SELECT `prenom`, `nom`, `naissance` FROM `etudiants`;");

// requete pour pour "fetch" les données
$result_fetch_job3 = $requ->fetch_all();
// echo '<pre>';
// var_dump($result_fetch_job3);
// echo '</pre>';

// while($x = $requ->fetch_array() != null){
//    var_dump($x);
// }


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
    <h1>La base de données job03</h1>
    <table>
      <thead>
         <th>prenom</th>
         <th>nom</th>
         <th>naissance</th>
      </thead>
      <tbody>
      <?php
      // On va utiliser une boucle pour remplire le tableau.
         $i = 0;
         $j =0;
         for($i = 0; $i < 6 ; $i++){         // Pour parcurire les colonnes.
            echo '<tr>';                     // crée une nouvelle ligne.
            for($j = 0; $j < 3; $j++){       // pour parcurire les linges
               echo '<td>';
               print_r($result_fetch_job3[$i][$j]);
               echo '</td>';
            }
            // echo '<\tr>';
         }

         // echo '<td>';
         // print_r();
         // echo '</td>';


?>
      </tbody>
    </table>
 </body>
 </html>