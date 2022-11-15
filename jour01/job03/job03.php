<!--
Mohamed HABBAAINA, le 15 nov 2022    
Dans le dossier runtrack2/jour01/job03, créez un fichier index.php.
En PHP, il existe différents types de variables. Créez des variables de types primitifs
(boolean, entier, chaîne de caractères, nombre à virgule flottante) et affectez-y des
valeurs.
A l’aide de php, générer un tableau html qui contient dans son header trois colonnes
(type, nom, valeur) et dans son body, une ligne pour chacune des variables et de leurs
informations. -->
<?php
$ecole = 'La plateforme_';
$nombre_etudians = 1000;
$taux_reussite = 90.8;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>
<body>
<table>
                <thead>
                    <th>nom</th>
                    <th>type</th>
                    <th>valeur</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo '\'$ecole\'';?></td>
                        <td><?php echo gettype($ecole);?></td>
                        <td><?php echo $ecole?></td>
                    </tr>
                    <tr>
                        <td><?php echo '\'$nombre_etudians\'';?></td>
                        <td><?php echo gettype($nombre_etudians);?></td>
                        <td><?php echo $nombre_etudians;?></td>
                    </tr>
                    <tr>
                        <td><?php echo '\'$taux_reussite\'';?></td>
                        <td><?php echo gettype($taux_reussite);?></td>
                        <td><?php echo $taux_reussite;?></td>
                    </tr>
                </tbody>

              </table>";
</body>
</html>