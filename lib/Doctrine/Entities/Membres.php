<?php

namespace MonCompte\Doctrine\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membres
 *
 * @ORM\Table(name="Membres")
 * @ORM\Entity
 */
class Membres
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMembre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ancien_si", type="integer", nullable=true)
     */
    private $idAncienSi;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudonyme", type="string", length=32, nullable=false)
     */
    private $pseudonyme;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=32, nullable=false)
     */
    private $motDePasse;

    /**
     * @var string
     *
     * @ORM\Column(name="ancien_mot_de_passe", type="string", length=32, nullable=false)
     */
    private $ancienMotDePasse;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", nullable=true)
     */
    private $statut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enfants", type="boolean", nullable=true)
     */
    private $enfants;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=8, nullable=true)
     */
    private $civilite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="genre", type="boolean", nullable=true)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=64, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=64, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_naissance", type="string", length=128, nullable=true)
     */
    private $lieuNaissance = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime", nullable=true)
     */
    private $dateInscription;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=4, nullable=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="aspirations", type="string", length=128, nullable=true)
     */
    private $aspirations;

    /**
     * @var string
     *
     * @ORM\Column(name="devise", type="text", nullable=false)
     */
    private $devise;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=false)
     */
    private $note;


    /**
     * Get idMembre
     *
     * @return integer
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set idAncienSi
     *
     * @param integer $idAncienSi
     * @return Membres
     */
    public function setIdAncienSi($idAncienSi)
    {
        $this->idAncienSi = $idAncienSi;

        return $this;
    }

    /**
     * Get idAncienSi
     *
     * @return integer
     */
    public function getIdAncienSi()
    {
        return $this->idAncienSi;
    }

    /**
     * Set pseudonyme
     *
     * @param string $pseudonyme
     * @return Membres
     */
    public function setPseudonyme($pseudonyme)
    {
        $this->pseudonyme = $pseudonyme;

        return $this;
    }

    /**
     * Get pseudonyme
     *
     * @return string
     */
    public function getPseudonyme()
    {
        return $this->pseudonyme;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return Membres
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set ancienMotDePasse
     *
     * @param string $ancienMotDePasse
     * @return Membres
     */
    public function setAncienMotDePasse($ancienMotDePasse)
    {
        $this->ancienMotDePasse = $ancienMotDePasse;

        return $this;
    }

    /**
     * Get ancienMotDePasse
     *
     * @return string
     */
    public function getAncienMotDePasse()
    {
        return $this->ancienMotDePasse;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Membres
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set enfants
     *
     * @param boolean $enfants
     * @return Membres
     */
    public function setEnfants($enfants)
    {
        $this->enfants = $enfants;

        return $this;
    }

    /**
     * Get enfants
     *
     * @return boolean
     */
    public function getEnfants()
    {
        return $this->enfants;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return Membres
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set genre
     *
     * @param boolean $genre
     * @return Membres
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return boolean
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Membres
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Membres
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Membres
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set lieuNaissance
     *
     * @param string $lieuNaissance
     * @return Membres
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;

        return $this;
    }

    /**
     * Get lieuNaissance
     *
     * @return string
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Membres
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Membres
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set aspirations
     *
     * @param string $aspirations
     * @return Membres
     */
    public function setAspirations($aspirations)
    {
        $this->aspirations = $aspirations;

        return $this;
    }

    /**
     * Get aspirations
     *
     * @return string
     */
    public function getAspirations()
    {
        return $this->aspirations;
    }

    /**
     * Set devise
     *
     * @param string $devise
     * @return Membres
     */
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get devise
     *
     * @return string
     */
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return Membres
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}