<?php 

// Sur la page index, faire un liens vers une autre page. 
// Passer d'une page à l'autre le contenu des variables lastname, 
// firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
// Il faudra afficher le contenu de ces variables sur la deuxième page.

// var_dump($_GET);
session_start();
$_SESSION["firstname"]="jeremy";
$_SESSION["age"]=30;
var_dump($_SESSION["firstname"]);
var_dump($_SESSION["age"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="./exercice2-page2.php?lastename=michel">page2</a>
</body>
</html>

