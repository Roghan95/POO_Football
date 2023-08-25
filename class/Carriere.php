<?php 

class Carriere {
    private int $annee;
    private Joueur $joueur;
    private Equipe $equipe;

    public function __construct(int $annee, Joueur $joueur, Equipe $equipe) {
        $this->annee = $annee;
        $this->joueur = $joueur;
        $this->equipe = $equipe;
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
     * Get the value of joueur
     */ 
    public function getJoueur()
    {
        return $this->joueur;
    }

    /**
     * Set the value of joueur
     *
     * @return  self
     */ 
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    /**
     * Get the value of equipe
     */ 
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set the value of equipe
     *
     * @return  self
     */ 
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }
}