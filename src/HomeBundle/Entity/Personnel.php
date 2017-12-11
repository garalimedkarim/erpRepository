<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\Column(name="sexe", type="string", length=50)
     */
    private $sexe;   

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
     * @var string
     *
     * @ORM\Column(name="statut_sociale", type="string", length=50, nullable=true)
     */
    private $statutSociale;    

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
     * @var string
     *
     * @ORM\Column(name="statut_association", type="string", length=50, nullable=true)
     */
    private $statutAssociation;        

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetimetz")
     */
    private $dateInscription;

    /**
     * @var collection
     * Many Users have Many Languages.
     * @ORM\ManyToMany(targetEntity="Language",cascade={"all"})
     */
    private $languages;

    public function __construct()
    {
        $this->addLanguage(new Language());
        $this->dateNaissance = new \DateTime("1990-12-12");
        $this->dateInscription = new \DateTime();
    }

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
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     *
     * @return self
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param string $cin
     *
     * @return self
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime $dateNaissance
     *
     * @return self
     */
    public function setDateNaissance(\DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * @param string $nationalite
     *
     * @return self
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * @return string
     */
    public function getGouvernerat()
    {
        return $this->gouvernerat;
    }

    /**
     * @param string $gouvernerat
     *
     * @return self
     */
    public function setGouvernerat($gouvernerat)
    {
        $this->gouvernerat = $gouvernerat;

        return $this;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     *
     * @return self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     *
     * @return self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return string
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * @param string $codePostale
     *
     * @return self
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * @return string
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * @param string $tel1
     *
     * @return self
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * @return string
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * @param string $tel2
     *
     * @return self
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * @return string
     */
    public function getTel3()
    {
        return $this->tel3;
    }

    /**
     * @param string $tel3
     *
     * @return self
     */
    public function setTel3($tel3)
    {
        $this->tel3 = $tel3;

        return $this;
    }

    /**
     * @return string
     */
    public function getMail1()
    {
        return $this->mail1;
    }

    /**
     * @param string $mail1
     *
     * @return self
     */
    public function setMail1($mail1)
    {
        $this->mail1 = $mail1;

        return $this;
    }

    /**
     * @return string
     */
    public function getMail2()
    {
        return $this->mail2;
    }

    /**
     * @param string $mail2
     *
     * @return self
     */
    public function setMail2($mail2)
    {
        $this->mail2 = $mail2;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatutSociale()
    {
        return $this->statutSociale;
    }

    /**
     * @param string $statutSociale
     *
     * @return self
     */
    public function setStatutSociale($statutSociale)
    {
        $this->statutSociale = $statutSociale;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPermisVoiture()
    {
        return $this->permisVoiture;
    }

    /**
     * @param bool $permisVoiture
     *
     * @return self
     */
    public function setPermisVoiture($permisVoiture)
    {
        $this->permisVoiture = $permisVoiture;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param string $profession
     *
     * @return self
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * @param string $societe
     *
     * @return self
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * @return string
     */
    public function getNiveauScolaire()
    {
        return $this->niveauScolaire;
    }

    /**
     * @param string $niveauScolaire
     *
     * @return self
     */
    public function setNiveauScolaire($niveauScolaire)
    {
        $this->niveauScolaire = $niveauScolaire;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormations()
    {
        return $this->formations;
    }

    /**
     * @param string $formations
     *
     * @return self
     */
    public function setFormations($formations)
    {
        $this->formations = $formations;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompetances()
    {
        return $this->competances;
    }

    /**
     * @param string $competances
     *
     * @return self
     */
    public function setCompetances($competances)
    {
        $this->competances = $competances;

        return $this;
    }

    /**
     * @return string
     */
    public function getActivitePrefere()
    {
        return $this->activitePrefere;
    }

    /**
     * @param string $activitePrefere
     *
     * @return self
     */
    public function setActivitePrefere($activitePrefere)
    {
        $this->activitePrefere = $activitePrefere;

        return $this;
    }

    /**
     * @return string
     */
    public function getActivitePrecedente()
    {
        return $this->activitePrecedente;
    }

    /**
     * @param string $activitePrecedente
     *
     * @return self
     */
    public function setActivitePrecedente($activitePrecedente)
    {
        $this->activitePrecedente = $activitePrecedente;

        return $this;
    }

    /**
     * @return string
     */
    public function getTempsLibre()
    {
        return $this->tempsLibre;
    }

    /**
     * @param string $tempsLibre
     *
     * @return self
     */
    public function setTempsLibre($tempsLibre)
    {
        $this->tempsLibre = $tempsLibre;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlusADonner()
    {
        return $this->plusADonner;
    }

    /**
     * @param string $plusADonner
     *
     * @return self
     */
    public function setPlusADonner($plusADonner)
    {
        $this->plusADonner = $plusADonner;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * @param string $remarques
     *
     * @return self
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param string $facebook
     *
     * @return self
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param string $twitter
     *
     * @return self
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @param string $skype
     *
     * @return self
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatutAssociation()
    {
        return $this->statutAssociation;
    }

    /**
     * @param string $statutAssociation
     *
     * @return self
     */
    public function setStatutAssociation($statutAssociation)
    {
        $this->statutAssociation = $statutAssociation;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * @param \DateTime $dateInscription
     *
     * @return self
     */
    public function setDateInscription(\DateTime $dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }



    /**
     * Get permisVoiture
     *
     * @return boolean
     */
    public function getPermisVoiture()
    {
        return $this->permisVoiture;
    }

    /**
     * Add language
     *
     * @param \HomeBundle\Entity\Language $language
     *
     * @return Personnel
     */
    public function addLanguage(\HomeBundle\Entity\Language $language)
    {
        $this->languages[] = $language;

        return $this;
    }

    /**
     * Remove language
     *
     * @param \HomeBundle\Entity\Language $language
     */
    public function removeLanguage(\HomeBundle\Entity\Language $language)
    {
        $this->languages->removeElement($language);
    }

    /**
     * Get languages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLanguages()
    {
        return $this->languages;
    }
}
