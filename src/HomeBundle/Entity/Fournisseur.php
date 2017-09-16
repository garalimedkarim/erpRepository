<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="fournisseur")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\FournisseurRepository")
 */
class Fournisseur
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
     * @ORM\Column(name="nom_fournisseur", type="string", length=100, unique=true)
     */
    private $nomFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="code_tva", type="string", length=18, nullable=true)
     */
    private $codeTva;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=25, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=25, nullable=true)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=25, nullable=true)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=25, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=100, nullable=true)
     */
    private $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm", type="string", length=25, nullable=true)
     */
    private $gsm;

    /**
     * @var string
     *
     * @ORM\Column(name="contact1", type="string", length=100, nullable=true)
     */
    private $contact1;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm1", type="string", length=25, nullable=true)
     */
    private $gsm1;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm2", type="string", length=25, nullable=true)
     */
    private $gsm2;

    /**
     * @var string
     *
     * @ORM\Column(name="contact2", type="string", length=100, nullable=true)
     */
    private $contact2;

    /**
     * @var string
     *
     * @ORM\Column(name="contact3", type="string", length=100, nullable=true)
     */
    private $contact3;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm3", type="string", length=25, nullable=true)
     */
    private $gsm3;

    /**
     * @var string
     *
     * @ORM\Column(name="echange", type="string", length=50, nullable=true)
     */
    private $echange;

    /**
     * @var string
     *
     * @ORM\Column(name="modereg", type="string", length=20, nullable=true)
     */
    private $modereg;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="postal", type="string", length=5, nullable=true)
     */
    private $postal;

    /**
     * @var string
     *
     * @ORM\Column(name="frs", type="string", length=10, nullable=true)
     */
    private $frs;

    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=15, nullable=true)
     */
    private $famille;

    /**
     * @var string
     *
     * @ORM\Column(name="remise", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $remise;

    /**
     * @var string
     *
     * @ORM\Column(name="solde", type="decimal", precision=3, scale=0, nullable=true)
     */
    private $solde;

    /**
     * @var string
     *
     * @ORM\Column(name="timbre", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $timbre;

    /**
     * @var int
     *
     * @ORM\Column(name="idfam", type="integer", nullable=true)
     */
    private $idfam;


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
     * Set nomFournisseur
     *
     * @param string $nomFournisseur
     *
     * @return Fournisseur
     */
    public function setNomFournisseur($nomFournisseur)
    {
        $this->nomFournisseur = $nomFournisseur;

        return $this;
    }

    /**
     * Get nomFournisseur
     *
     * @return string
     */
    public function getNomFournisseur()
    {
        return $this->nomFournisseur;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Fournisseur
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
     * Set ville
     *
     * @param string $ville
     *
     * @return Fournisseur
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
     * Set codeTva
     *
     * @param string $codeTva
     *
     * @return Fournisseur
     */
    public function setCodeTva($codeTva)
    {
        $this->codeTva = $codeTva;

        return $this;
    }

    /**
     * Get codeTva
     *
     * @return string
     */
    public function getCodeTva()
    {
        return $this->codeTva;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Fournisseur
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     *
     * @return Fournisseur
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
     * Set tel1
     *
     * @param string $tel1
     *
     * @return Fournisseur
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
     * Set fax
     *
     * @param string $fax
     *
     * @return Fournisseur
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Fournisseur
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set gsm
     *
     * @param string $gsm
     *
     * @return Fournisseur
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get gsm
     *
     * @return string
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set contact1
     *
     * @param string $contact1
     *
     * @return Fournisseur
     */
    public function setContact1($contact1)
    {
        $this->contact1 = $contact1;

        return $this;
    }

    /**
     * Get contact1
     *
     * @return string
     */
    public function getContact1()
    {
        return $this->contact1;
    }

    /**
     * Set gsm1
     *
     * @param string $gsm1
     *
     * @return Fournisseur
     */
    public function setGsm1($gsm1)
    {
        $this->gsm1 = $gsm1;

        return $this;
    }

    /**
     * Get gsm1
     *
     * @return string
     */
    public function getGsm1()
    {
        return $this->gsm1;
    }

    /**
     * Set gsm2
     *
     * @param string $gsm2
     *
     * @return Fournisseur
     */
    public function setGsm2($gsm2)
    {
        $this->gsm2 = $gsm2;

        return $this;
    }

    /**
     * Get gsm2
     *
     * @return string
     */
    public function getGsm2()
    {
        return $this->gsm2;
    }

    /**
     * Set contact2
     *
     * @param string $contact2
     *
     * @return Fournisseur
     */
    public function setContact2($contact2)
    {
        $this->contact2 = $contact2;

        return $this;
    }

    /**
     * Get contact2
     *
     * @return string
     */
    public function getContact2()
    {
        return $this->contact2;
    }

    /**
     * Set contact3
     *
     * @param string $contact3
     *
     * @return Fournisseur
     */
    public function setContact3($contact3)
    {
        $this->contact3 = $contact3;

        return $this;
    }

    /**
     * Get contact3
     *
     * @return string
     */
    public function getContact3()
    {
        return $this->contact3;
    }

    /**
     * Set gsm3
     *
     * @param string $gsm3
     *
     * @return Fournisseur
     */
    public function setGsm3($gsm3)
    {
        $this->gsm3 = $gsm3;

        return $this;
    }

    /**
     * Get gsm3
     *
     * @return string
     */
    public function getGsm3()
    {
        return $this->gsm3;
    }

    /**
     * Set echange
     *
     * @param string $echange
     *
     * @return Fournisseur
     */
    public function setEchange($echange)
    {
        $this->echange = $echange;

        return $this;
    }

    /**
     * Get echange
     *
     * @return string
     */
    public function getEchange()
    {
        return $this->echange;
    }

    /**
     * Set modereg
     *
     * @param string $modereg
     *
     * @return Fournisseur
     */
    public function setModereg($modereg)
    {
        $this->modereg = $modereg;

        return $this;
    }

    /**
     * Get modereg
     *
     * @return string
     */
    public function getModereg()
    {
        return $this->modereg;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Fournisseur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set postal
     *
     * @param string $postal
     *
     * @return Fournisseur
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * Get postal
     *
     * @return string
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Set frs
     *
     * @param string $frs
     *
     * @return Fournisseur
     */
    public function setFrs($frs)
    {
        $this->frs = $frs;

        return $this;
    }

    /**
     * Get frs
     *
     * @return string
     */
    public function getFrs()
    {
        return $this->frs;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Fournisseur
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set remise
     *
     * @param string $remise
     *
     * @return Fournisseur
     */
    public function setRemise($remise)
    {
        $this->remise = $remise;

        return $this;
    }

    /**
     * Get remise
     *
     * @return string
     */
    public function getRemise()
    {
        return $this->remise;
    }

    /**
     * Set solde
     *
     * @param string $solde
     *
     * @return Fournisseur
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return string
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set timbre
     *
     * @param string $timbre
     *
     * @return Fournisseur
     */
    public function setTimbre($timbre)
    {
        $this->timbre = $timbre;

        return $this;
    }

    /**
     * Get timbre
     *
     * @return string
     */
    public function getTimbre()
    {
        return $this->timbre;
    }

    /**
     * Set idfam
     *
     * @param integer $idfam
     *
     * @return Fournisseur
     */
    public function setIdfam($idfam)
    {
        $this->idfam = $idfam;

        return $this;
    }

    /**
     * Get idfam
     *
     * @return int
     */
    public function getIdfam()
    {
        return $this->idfam;
    }
}

