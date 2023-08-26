<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Football</title>
</head>

<body>
    <?php
    spl_autoload_register(function ($class_name) {
        require_once $class_name . '.php';
    });

    $france = new Pays("France");
    $bresil = new Pays("Brésil");
    $portugal = new Pays("Portugal");
    $argentine = new Pays("Argentine");
    $espagne = new Pays("Espagne");
    $angleterre = new Pays("Angleterre");


    $nationalite1 = new Nationalite("Français");
    $nationalite2 = new Nationalite("Brésilien");
    $nationalite3 = new Nationalite("Portugais");
    $nationalite4 = new Nationalite("Argentin");


    $joueur1 = new Joueur("Mbappe", "Killian", "15-03-2001", $nationalite1);
    $joueur2 = new Joueur("Jr", "Neymar", "27-03-1997", $nationalite2);
    $joueur3 = new Joueur("Lionel", "Messi", "16-01-1986", $nationalite3);
    $joueur4 = new Joueur("Cristiano", "Ronaldo", "13-07-1985", $nationalite4);


    $equipe1 = new Equipe($france, "PSG");
    $equipe2 = new Equipe($france, "OM");
    $equipe3 = new Equipe($france, "Racing club Stras");
    $equipe4 = new Equipe($espagne, "Real Madrid");
    $equipe5 = new Equipe($espagne, "FC Barcelone");

    $carriere1 = new Carriere(2015, $joueur1, $equipe1);
    $carriere1 = new Carriere(2017, $joueur2, $equipe1);


    echo $france->lesEquipesDuPays();

    // Afficher la carrière d'un joueur
    echo $joueur1->afficherCarriere();
    echo $joueur2->afficherCarriere();


    ?>

</body>

</html>