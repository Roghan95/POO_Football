<?php

class Carriere
{
    private int $anneeSaison;
    private Joueur $joueurs;
    private Equipe $equipes;

    public function __construct(int $anneeSaison, Joueur $joueurs, Equipe $equipes)
    {
        $this->anneeSaison = $anneeSaison;
        $this->joueurs = $joueurs;
        $this->equipes = $equipes;
        $this->joueurs->ajouterCarriere($this);
        $this->equipes->ajouterJoueur($joueurs);
    }

    /**
     * Get the value of anneeSaison
     */
    public function getAnneeSaison()
    {
        return $this->anneeSaison;
    }

    /**
     * Set the value of anneeSaison
     *
     * @return  self
     */
    public function setAnneeSaison(int $anneeSaison)
    {
        $this->anneeSaison = $anneeSaison;

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
    public function setJoueur(Joueur $joueurs)
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
    public function setEquipe(Equipe $equipes)
    {
        $this->equipes = $equipes;

        return $this;
    }

    public function __toString()
    {
        return $this->joueurs . " (" . $this->anneeSaison . ")";
    }
}
