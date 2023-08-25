<?php

class Joueur {
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private Pays $nom_pays;


    public function __construct(string $nom, string $prenom, DateTime $date_naissance, Pays $nom_pays)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->nom_pays = $nom_pays;
    }
}