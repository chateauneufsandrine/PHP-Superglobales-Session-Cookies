<?php  
// On vérifie que la méthode utilisé est bien celle qu'on voulait
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    echo("ce n'est pas la bonne methode");
    exit();
}

// On vérifie qu'on a bien reçu tous les inputs
// if (!isset($_GET["firstname"]) || !isset($_GET["lastname"])) {
if (!isset($_GET["lastname"])) {
    echo("il manque un parametre");
    exit();
}

// On vérifie qu'un des champs n'est pas vide
// if (empty($_GET["firstname"]) || empty($_GET["lastname"])) {
if (empty($_GET["lastname"])) {
    echo("le champ est vide");
    exit();
}

// Input Sanitization
// $prenom = htmlspecialchars(trim($_GET["firstname"]));
$nom = htmlspecialchars(trim($_GET["lastname"]));
?>


