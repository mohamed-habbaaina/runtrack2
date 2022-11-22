 <!-- 
    ***     Mohamed HABBAAINA, le 21 nov 2022       ***

Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer.
 -->
 <?php 
 foreach($_GET as $style){
 switch ($style){
    case $style == 'style1':
        $style = 'style1.css';
        break;
    case $style == 'style2':
        $style = 'style2.css';
        break;
    case $style == 'style3':
         $style = 'style3.css';
         break;
    default:
    break;
 }
}
 
 ?>
 <!DOCTYPE html>
 <html lang="fr">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $style; ?>">
    <title>Document</title>
 </head>
 <body>                    <!-- Le formulaire select option style-->
<form method="get">              
      
        <select name="style" id="style">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
            <option value="style3">style3</option>
        </select>

        <input type="submit" value="Envoyer"/>
</form>
</body>
</html>