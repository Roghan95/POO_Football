<?php

class Joueur
{
    private string $nom;
    private string $prenom;
    private DateTime $date_naissance;
    private Nationalite $nationalite;
    private array $carriere = [];

    public function __construct(string $nom, string $prenom, string $date_naissance, Nationalite $nationalite)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = new DateTime($date_naissance);
        $this->nationalite = $nationalite;
    }

    /**
     * Get the value of nom_pays
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDate_naissance()
    {
        return $this->date_naissance;
    }

    public function getNationnalite()
    {
        return $this->nationalite;
    }

    public function getCarriere()
    {
        return $this->carriere;
    }

    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function setDate_naissance(string $date_naissance)
    {
        $this->date_naissance = new DateTime($date_naissance);
    }

    public function setNationnalite(Nationalite $nationalite)
    {
        $this->nationalite = $nationalite;
    }

    public function __toString()
    {
        return $this->prenom . " " . $this->nom;
    }

    public function ajouterCarriere(Carriere $carriere)
    {
        $this->carriere[] = $carriere;
    }

    public function afficherCarriere()
    {
        $mtn = new DateTime();
        $age = $mtn->diff($this->date_naissance)->y;

        $resultat = "<h1>Carrière de $this :</h1>
        <p>Nationalité : " . $this->nationalite->getLibelle() . "<br>
        Age : $age ans</p>
        <p>Equipes de $this->prenom $this->nom :<br>";

        foreach ($this->carriere as $carriere) {
            $resultat .= $carriere->getEquipe() . " (" . $carriere->getAnneeSaison() . ")<br>";
        }
        return $resultat;
    }
}
