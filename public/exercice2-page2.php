<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> COUCOU ICI PAGE2</h1>
   <p><?= $_SESSION["firstname"] ?>
   <?= $_SESSION["age"] ?></p>
</body>
</html>