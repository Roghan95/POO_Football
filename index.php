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
$bresil = new Pays("Brésil");
$portugal = new Pays("Portugal");
$argentine = new Pays("Argentine");

$joueur1 = new Joueur("Mbappe", "Killian", "15/03/2001", $france);
$joueur2 = new Joueur("Neymar", "Jr", "27/03/1991", $bresil);
$joueur3 = new Joueur("Lionel", "Messi", "16/01/1986", $argentine);
$joueur4 = new Joueur("Cristiano", "Ronaldo", "13/07/1985", $portugal);

$equipe1 = new Equipe($france, "PSG");
$equipe2 = new Equipe($bresil, "")





?>
    
</body>
</html>