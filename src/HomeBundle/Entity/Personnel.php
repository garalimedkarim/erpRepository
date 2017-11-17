<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personnel
 *
 * @ORM\Table(name="personnel")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\PersonnelRepository")
 */
class Personnel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=50, nullable=true, unique=true)
     */
    private $cin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetimetz", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=100, nullable=true)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="gouvernerat", type="string", length=100, nullable=true)
     */
    private $gouvernerat;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postale", type="string", length=255, nullable=true)
     */
    private $codePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=100, nullable=true)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=100, nullable=true)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="tel3", type="string", length=100, nullable=true)
     */
    private $tel3;

    /**
     * @var string
     *
     * @ORM\Column(name="mail1", type="string", length=50, nullable=true)
     */
    private $mail1;

    /**
     * @var string
     *
     * @ORM\Column(name="mail2", type="string", length=50, nullable=true)
     */
    private $mail2;

    /**
     * @var bool
     *
     * @ORM\Column(name="permis_voiture", type="boolean")
     */
    private $permisVoiture;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=100, nullable=true)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=100, nullable=true)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_scolaire", type="string", length=100, nullable=true)
     */
    private $niveauScolaire;

    /**
     * @var string
     *
     * @ORM\Column(name="formations", type="string", length=255, nullable=true)
     */
    private $formations;

    /**
     * @var string
     *
     * @ORM\Column(name="competances", type="string", length=255, nullable=true)
     */
    private $competances;

    /**
     * @var string
     *
     * @ORM\Column(name="activite_prefere", type="string", length=100, nullable=true)
     */
    private $activitePrefere;

    /**
     * @var string
     *
     * @ORM\Column(name="activite_precedente", type="string", length=255, nullable=true)
     */
    private $activitePrecedente;

    /**
     * @var string
     *
     * @ORM\Column(name="temps_libre", type="string", length=255, nullable=true)
     */
    private $tempsLibre;

    /**
     * @var string
     *
     * @ORM\Column(name="plus_a_donner", type="string", length=255, nullable=true)
     */
    private $plusADonner;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255, nullable=true)
     */
    private $remarques;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=100, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=100, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=100, nullable=true)
     */
    private $skype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetimetz")
     */
    private $dateInscription;

    /**
     * @var array
     *
     * @ORM\Column(name="langue", type="simple_array", nullable=true)
     */
    private $langue;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Personnel
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Personnel
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
     * Set cin
     *
     * @param string $cin
     *
     * @return Personnel
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Personnel
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
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Personnel
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set gouvernerat
     *
     * @param string $gouvernerat
     *
     * @return Personnel
     */
    public function setGouvernerat($gouvernerat)
    {
        $this->gouvernerat = $gouvernerat;

        return $this;
    }

    /**
     * Get gouvernerat
     *
     * @return string
     */
    public function getGouvernerat()
    {
        return $this->gouvernerat;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Personnel
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Personnel
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostale
     *
     * @param string $codePostale
     *
     * @return Personnel
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * Get codePostale
     *
     * @return string
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     *
     * @return Personnel
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     *
     * @return Personnel
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set tel3
     *
     * @param string $tel3
     *
     * @return Personnel
     */
    public function setTel3($tel3)
    {
        $this->tel3 = $tel3;

        return $this;
    }

    /**
     * Get tel3
     *
     * @return string
     */
    public function getTel3()
    {
        return $this->tel3;
    }

    /**
     * Set mail1
     *
     * @param string $mail1
     *
     * @return Personnel
     */
    public function setMail1($mail1)
    {
        $this->mail1 = $mail1;

        return $this;
    }

    /**
     * Get mail1
     *
     * @return string
     */
    public function getMail1()
    {
        return $this->mail1;
    }

    /**
     * Set mail2
     *
     * @param string $mail2
     *
     * @return Personnel
     */
    public function setMail2($mail2)
    {
        $this->mail2 = $mail2;

        return $this;
    }

    /**
     * Get mail2
     *
     * @return string
     */
    public function getMail2()
    {
        return $this->mail2;
    }

    /**
     * Set permisVoiture
     *
     * @param boolean $permisVoiture
     *
     * @return Personnel
     */
    public function setPermisVoiture($permisVoiture)
    {
        $this->permisVoiture = $permisVoiture;

        return $this;
    }

    /**
     * Get permisVoiture
     *
     * @return bool
     */
    public function getPermisVoiture()
    {
        return $this->permisVoiture;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return Personnel
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return Personnel
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * Set niveauScolaire
     *
     * @param string $niveauScolaire
     *
     * @return Personnel
     */
    public function setNiveauScolaire($niveauScolaire)
    {
        $this->niveauScolaire = $niveauScolaire;

        return $this;
    }

    /**
     * Get niveauScolaire
     *
     * @return string
     */
    public function getNiveauScolaire()
    {
        return $this->niveauScolaire;
    }

    /**
     * Set formations
     *
     * @param string $formations
     *
     * @return Personnel
     */
    public function setFormations($formations)
    {
        $this->formations = $formations;

        return $this;
    }

    /**
     * Get formations
     *
     * @return string
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * Set competances
     *
     * @param string $competances
     *
     * @return Personnel
     */
    public function setCompetances($competances)
    {
        $this->competances = $competances;

        return $this;
    }

    /**
     * Get competances
     *
     * @return string
     */
    public function getCompetances()
    {
        return $this->competances;
    }

    /**
     * Set activitePrefere
     *
     * @param string $activitePrefere
     *
     * @return Personnel
     */
    public function setActivitePrefere($activitePrefere)
    {
        $this->activitePrefere = $activitePrefere;

        return $this;
    }

    /**
     * Get activitePrefere
     *
     * @return string
     */
    public function getActivitePrefere()
    {
        return $this->activitePrefere;
    }

    /**
     * Set activitePrecedente
     *
     * @param string $activitePrecedente
     *
     * @return Personnel
     */
    public function setActivitePrecedente($activitePrecedente)
    {
        $this->activitePrecedente = $activitePrecedente;

        return $this;
    }

    /**
     * Get activitePrecedente
     *
     * @return string
     */
    public function getActivitePrecedente()
    {
        return $this->activitePrecedente;
    }

    /**
     * Set tempsLibre
     *
     * @param string $tempsLibre
     *
     * @return Personnel
     */
    public function setTempsLibre($tempsLibre)
    {
        $this->tempsLibre = $tempsLibre;

        return $this;
    }

    /**
     * Get tempsLibre
     *
     * @return string
     */
    public function getTempsLibre()
    {
        return $this->tempsLibre;
    }

    /**
     * Set plusADonner
     *
     * @param string $plusADonner
     *
     * @return Personnel
     */
    public function setPlusADonner($plusADonner)
    {
        $this->plusADonner = $plusADonner;

        return $this;
    }

    /**
     * Get plusADonner
     *
     * @return string
     */
    public function getPlusADonner()
    {
        return $this->plusADonner;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     *
     * @return Personnel
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * Get remarques
     *
     * @return string
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Personnel
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Personnel
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set skype
     *
     * @param string $skype
     *
     * @return Personnel
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return Personnel
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
     * Set langue
     *
     * @param array $langue
     *
     * @return Personnel
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;

        return $this;
    }

    /**
     * Get langue
     *
     * @return array
     */
    public function getLangue()
    {
        return $this->langue;
    }
}

