<?php

namespace vendor\jdl\Entity;

class Tache
{
    private int $id_tache;
    private ?string $titre_tache;
    private ?string $description;
    private int $id_utilisateur;
    private int $id_priorite;
    private int $id_cdv;
    private int $id_projet;
    private ?string $cdv;
    private ?string $priorite;

    /**
     * Get the value of id_tache
     */
    public function getId_tache()
    {
        return $this->id_tache;
    }

    /**
     * Set the value of id_tache
     *
     * @return  self
     */
    public function setId_tache($id_tache)
    {
        $this->id_tache = $id_tache;

        return $this;
    }

    /**
     * Get the value of titre_tache
     */
    public function getTitre_tache()
    {
        return $this->titre_tache;
    }

    /**
     * Set the value of titre_tache
     *
     * @return  self
     */
    public function setTitre_tache($titre_tache)
    {
        $this->titre_tache = $titre_tache;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of id_utilisateur
     */
    public function getId_utilisateur()
    {
        return $this->id_utilisateur;
    }

    /**
     * Set the value of id_utilisateur
     *
     * @return  self
     */
    public function setId_utilisateur($id_utilisateur)
    {
        $this->id_utilisateur = $id_utilisateur;

        return $this;
    }

    /**
     * Get the value of id_priorite
     */
    public function getId_priorite()
    {
        return $this->id_priorite;
    }

    /**
     * Set the value of id_priorite
     *
     * @return  self
     */
    public function setId_priorite($id_priorite)
    {
        $this->id_priorite = $id_priorite;

        return $this;
    }

    /**
     * Get the value of id_cdv
     */
    public function getId_cdv()
    {
        return $this->id_cdv;
    }

    /**
     * Set the value of id_cdv
     *
     * @return  self
     */
    public function setId_cdv($id_cdv)
    {
        $this->id_cdv = $id_cdv;

        return $this;
    }

    /**
     * Get the value of id_projet
     */
    public function getId_projet()
    {
        return $this->id_projet;
    }

    /**
     * Set the value of id_projet
     *
     * @return  self
     */
    public function setId_projet($id_projet)
    {
        $this->id_projet = $id_projet;

        return $this;
    }

    /**
     * Get the value of cdv
     */ 
    public function getCdv()
    {
        return $this->cdv;
    }

    /**
     * Get the value of priorite
     */ 
    public function getPriorite()
    {
        return $this->priorite;
    }

}
