<?php

class Equipe {
    private Pays $pays;
    private string $nom;
    private array $joueurs = [];


    public function __construct(Pays $pays, string $nom)
        $this->pays = $pays;
        $this->nom = $nom;


        // Getters
    public function getPays() {
        return $this->pays;
    }

    public function getNom() {
        return $this->nom;
    }

        // Setters
    public function setPays(Pays $pays) {
        $this->pays = $pays;
    }

    public function setNom(string $nom) {
        $this->nom = $nom;
    }
}