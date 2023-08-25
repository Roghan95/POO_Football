<?php
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Football</title>
</head>
<body>
<?php 

$france = new Pays("France");

$psg = new Equipe($france, "PSG");

$jouer = new Joueur()

$carriere = new Carriere(2017, $joueur, $psg);
// $joueur = new Joueur("");


?>
    
</body>
</html>