<?php

class Pays
{
    private string $nom_pays;
    private array $equipes = [];

    public function __construct(string $nom_pays)
    {
        $this->nom_pays = $nom_pays;
    }

    public function getNomPays()
    {
        return $this->nom_pays;
    }

    public function setNomPays(string $nom_pays)
    {
        $this->nom_pays = $nom_pays;
    }

    public function __toString()
    {
        return $this->nom_pays;
    }

    public function ajouterEquipe(Equipe $equipes)
    {
        $this->equipes[] = $equipes;
    }

    public function lesEquipesDuPays()
    {
        $resultat = "<h1>Les équipes du pays : </h1>";
        foreach ($this->equipes as $equipe) {
            $resultat .= $equipe . "<br>";
        }
        return $resultat;
    }
}
