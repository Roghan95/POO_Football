<?php

class Joueur {
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private Pays $nom_pays;


    public function __construct(string $nom, string $prenom, string $date_naissance, Pays $nom_pays)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = new DateTime($date_naissance);
        $this->nom_pays = $nom_pays;
    }

    /**
     * Get the value of nom_pays
     */ 
    public function getNom_pays()
    {
        return $this->nom_pays;
    }

    /**
     * Set the value of nom_pays
     *
     * @return  self
     */ 
    public function setNom_pays($nom_pays)
    {
        $this->nom_pays = $nom_pays;
        return $this;
    }

    /**
     * Get the value of date_naissance
     */ 
    public function getDate_naissance()
    {
        return $this->date_naissance;
    }

    /**
     * Set the value of date_naissance
     *
     * @return  self
     */ 
    public function setDate_naissance(string $date_naissance)
    {
        $this->date_naissance = new DateTime($date_naissance);
        return $this;
    }

    public function __toString()
    {
        return $this->prenom ." ". $this->nom;
    }


}