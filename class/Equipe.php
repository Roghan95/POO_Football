<?php

class Equipe {
    private Pays $pays;
    private string $nom_equipe;
    private array $joueurs = [];


    public function __construct(Pays $pays, string $nom_equipe) {
        $this->pays = $pays;
        $this->nom_equipe = $nom_equipe;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of nom_equipe
     */ 
    public function getNom_equipe()
    {
        return $this->nom_equipe;
    }

    /**
     * Set the value of nom_equipe
     *
     * @return  self
     */ 
    public function setNom_equipe($nom_equipe)
    {
        $this->nom_equipe = $nom_equipe;

        return $this;
    }

    /**
     * Get the value of joueurs
     */ 
    public function getJoueurs()
    {
        return $this->joueurs;
    }

    /**
     * Set the value of joueurs
     *
     * @return  self
     */ 
    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }
}