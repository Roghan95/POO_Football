<?php 

class Carriere {
    private int $annee;
    private Joueur $joueurs;
    private Equipe $equipes;

    public function __construct(int $annee, Joueur $joueurs, Equipe $equipes) {
        $this->annee = $annee;
        $this->joueurs = $joueurs;
        $this->equipes = $equipes;
    }

    /**
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get the value of joueurs
     */ 
    public function getJoueur()
    {
        return $this->joueurs;
    }

    /**
     * Set the value of joueurs
     *
     * @return  self
     */ 
    public function setJoueur($joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }

    /**
     * Get the value of equipes
     */ 
    public function getEquipe()
    {
        return $this->equipes;
    }

    /**
     * Set the value of equipes
     *
     * @return  self
     */ 
    public function setEquipe($equipes)
    {
        $this->equipes = $equipes;

        return $this;
    }
}