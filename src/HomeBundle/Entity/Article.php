<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\ArticleRepository")
 */
class Article
{
    # Constantes :
    private $articleTypes = array(  'Article commercial' => "commercial",
                                    'Article montée' => "montee" );

    private $tvaArray = array(6=>6,12=>12,18=>18,24=>24);

    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_a", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixA = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_aht", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixAht = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_attc", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixAttc = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_v", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixV = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_revient", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixRevient;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_ht", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixHt = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_detail_1", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixDetail1 = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_detail_2", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixDetail2 = 0;    

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=30, nullable=true)
     */
    private $unit;

    /**
     * @var string
     *
     * @ORM\Column(name="tva", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $tva;

    /**
     * @var string
     *
     * @ORM\Column(name="marge", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $marge;

    /**
     * @var string
     *
     * @ORM\Column(name="marged", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $marged;

    /**
     * @var string
     *
     * @ORM\Column(name="marge_max", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $margeMax = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="rem", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $rem;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_alert", type="integer", nullable=true)
     */
    private $stockAlert;    

    /**
     * @var int
     *
     * @ORM\Column(name="stock_min", type="integer", nullable=true)
     */
    private $stockMin;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_max", type="integer", nullable=true)
     */
    private $stockMax;


    /**
     * @var int
     *
     * @ORM\Column(name="fdc", type="integer", nullable=true)
     */
    private $fdc;

    /**
     * @var string
     *
     * @ORM\Column(name="rayon", type="string", length=30, nullable=true)
     */
    private $rayon;

    /**
     * @var string
     *
     * @ORM\Column(name="etage", type="string", length=30, nullable=true)
     */
    private $etage;

    /**
     * @var int
     *
     * @ORM\Column(name="cod_soc", type="integer", nullable=true)
     */
    private $codSoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var int
     *
     * @ORM\Column(name="stkmag", type="integer", nullable=true)
     */
    private $stkmag;

    /**
     * @var string
     *
     * @ORM\Column(name="charge", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $charge;

    /**
     * @var string
     *
     * @ORM\Column(name="coef", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $coef;

    /**
     * @var string
     *
     * @ORM\Column(name="devise", type="string", length=5, nullable=true)
     */
    private $devise;

    /**
     * @var string
     *
     * @ORM\Column(name="const", type="string", length=15, nullable=true)
     */
    private $const;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_code", type="string", length=20, nullable=true)
     */
    private $refCode;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_euro", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixEuro;

    /**
     * @var string
     *
     * @ORM\Column(name="prix_gros", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $prixGros = 0;

    /**
     * @Assert\Range(
     *      min = 0,
     *      max = 100,
     *      minMessage = "Undefined value",
     *      maxMessage = "Undefined value"
     * )    
     * @var string
     *
     * @ORM\Column(name="marge1", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $marge1 = 0;

    /**
     * @Assert\Range(
     *      min = 0,
     *      max = 100,
     *      minMessage = "Undefined value",
     *      maxMessage = "Undefined value"
     * )       
     * @var string
     *
     * @ORM\Column(name="marge2", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $marge2 = 0;

    /**
     * @Assert\Range(
     *      min = 0,
     *      max = 100,
     *      minMessage = "Undefined value",
     *      maxMessage = "Undefined value"
     * )       
     * @var string
     *
     * @ORM\Column(name="marge3", type="decimal", precision=6, scale=3, nullable=true)
     */
    private $marge3 = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="cal", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $cal;

    /**
     * Many Article have One Fournisseur.
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumn(name="fournisseur_id", referencedColumnName="id")
     */
    private $fournisseur;

    /**
     * Many Article have One Famille.
     * @ORM\ManyToOne(targetEntity="FamilleArticle")
     * @ORM\JoinColumn(name="famille_article_id", referencedColumnName="id")
     */
    private $familleArticle;    

    /**
     * @var string
     *
     * @ORM\Column(name="pr", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $pr;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="type_art", type="string", length=20, nullable=true)
     */
    private $typeArt;


    public function __construct()
    {
        $this->dateCreation = new \DateTime();
    }

    public function getTvaArray()
    {
        return $this->tvaArray;
    }      

    public function getArticleTypes()
    {
        return $this->articleTypes;
    }    

    /**
     * Get reference
     *
     * @return integer
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Article
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set prixA
     *
     * @param string $prixA
     *
     * @return Article
     */
    public function setPrixA($prixA)
    {
        $this->prixA = $prixA;
    
        return $this;
    }

    /**
     * Get prixA
     *
     * @return string
     */
    public function getPrixA()
    {
        return $this->prixA;
    }

    /**
     * Set prixAht
     *
     * @param string $prixAht
     *
     * @return Article
     */
    public function setPrixAht($prixAht)
    {
        $this->prixAht = $prixAht;
    
        return $this;
    }

    /**
     * Get prixAht
     *
     * @return string
     */
    public function getPrixAht()
    {
        return $this->prixAht;
    }

    /**
     * Set prixAttc
     *
     * @param string $prixAttc
     *
     * @return Article
     */
    public function setPrixAttc($prixAttc)
    {
        $this->prixAttc = $prixAttc;
    
        return $this;
    }

    /**
     * Get prixAttc
     *
     * @return string
     */
    public function getPrixAttc()
    {
        return $this->prixAttc;
    }

    /**
     * Set prixV
     *
     * @param string $prixV
     *
     * @return Article
     */
    public function setPrixV($prixV)
    {
        $this->prixV = $prixV;
    
        return $this;
    }

    /**
     * Get prixV
     *
     * @return string
     */
    public function getPrixV()
    {
        return $this->prixV;
    }

    /**
     * Set prixRevient
     *
     * @param string $prixRevient
     *
     * @return Article
     */
    public function setPrixRevient($prixRevient)
    {
        $this->prixRevient = $prixRevient;
    
        return $this;
    }

    /**
     * Get prixRevient
     *
     * @return string
     */
    public function getPrixRevient()
    {
        return $this->prixRevient;
    }

    /**
     * Set prixHt
     *
     * @param string $prixHt
     *
     * @return Article
     */
    public function setPrixHt($prixHt)
    {
        $this->prixHt = $prixHt;
    
        return $this;
    }

    /**
     * Get prixHt
     *
     * @return string
     */
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * Set prixDetail1
     *
     * @param string $prixDetail1
     *
     * @return Article
     */
    public function setPrixDetail1($prixDetail1)
    {
        $this->prixDetail1 = $prixDetail1;
    
        return $this;
    }

    /**
     * Get prixDetail1
     *
     * @return string
     */
    public function getPrixDetail1()
    {
        return $this->prixDetail1;
    }

    /**
     * Set prixDetail2
     *
     * @param string $prixDetail2
     *
     * @return Article
     */
    public function setPrixDetail2($prixDetail2)
    {
        $this->prixDetail2 = $prixDetail2;
    
        return $this;
    }

    /**
     * Get prixDetail2
     *
     * @return string
     */
    public function getPrixDetail2()
    {
        return $this->prixDetail2;
    }    

    /**
     * Set unit
     *
     * @param string $unit
     *
     * @return Article
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    
        return $this;
    }

    /**
     * Get unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set tva
     *
     * @param string $tva
     *
     * @return Article
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    
        return $this;
    }

    /**
     * Get tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Article
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    
        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set stockAlert
     *
     * @param integer $stockAlert
     *
     * @return Article
     */
    public function setStockAlert($stockAlert)
    {
        $this->stockAlert = $stockAlert;
    
        return $this;
    }

    /**
     * Get stockAlert
     *
     * @return integer
     */
    public function getStockAlert()
    {
        return $this->stockAlert;
    }

    /**
     * Set marge
     *
     * @param string $marge
     *
     * @return Article
     */
    public function setMarge($marge)
    {
        $this->marge = $marge;
    
        return $this;
    }

    /**
     * Get marge
     *
     * @return string
     */
    public function getMarge()
    {
        return $this->marge;
    }

    /**
     * Set marged
     *
     * @param string $marged
     *
     * @return Article
     */
    public function setMarged($marged)
    {
        $this->marged = $marged;
    
        return $this;
    }

    /**
     * Get marged
     *
     * @return string
     */
    public function getMarged()
    {
        return $this->marged;
    }

    /**
     * Set margeMax
     *
     * @param string $margeMax
     *
     * @return Article
     */
    public function setMargeMax($margeMax)
    {
        $this->margeMax = $margeMax;
    
        return $this;
    }

    /**
     * Get margeMax
     *
     * @return string
     */
    public function getMargeMax()
    {
        return $this->margeMax;
    }

    /**
     * Set rem
     *
     * @param string $rem
     *
     * @return Article
     */
    public function setRem($rem)
    {
        $this->rem = $rem;
    
        return $this;
    }

    /**
     * Get rem
     *
     * @return string
     */
    public function getRem()
    {
        return $this->rem;
    }

    /**
     * Set stockMin
     *
     * @param integer $stockMin
     *
     * @return Article
     */
    public function setStockMin($stockMin)
    {
        $this->stockMin = $stockMin;
    
        return $this;
    }

    /**
     * Get stockMin
     *
     * @return integer
     */
    public function getStockMin()
    {
        return $this->stockMin;
    }

    /**
     * Set stockMax
     *
     * @param integer $stockMax
     *
     * @return Article
     */
    public function setStockMax($stockMax)
    {
        $this->stockMax = $stockMax;
    
        return $this;
    }

    /**
     * Get stockMax
     *
     * @return integer
     */
    public function getStockMax()
    {
        return $this->stockMax;
    }    

    /**
     * Set fdc
     *
     * @param integer $fdc
     *
     * @return Article
     */
    public function setFdc($fdc)
    {
        $this->fdc = $fdc;
    
        return $this;
    }

    /**
     * Get fdc
     *
     * @return integer
     */
    public function getFdc()
    {
        return $this->fdc;
    }

    /**
     * Set rayon
     *
     * @param string $rayon
     *
     * @return Article
     */
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;
    
        return $this;
    }

    /**
     * Get rayon
     *
     * @return string
     */
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set etage
     *
     * @param string $etage
     *
     * @return Article
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;
    
        return $this;
    }

    /**
     * Get etage
     *
     * @return string
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Set codSoc
     *
     * @param integer $codSoc
     *
     * @return Article
     */
    public function setCodSoc($codSoc)
    {
        $this->codSoc = $codSoc;
    
        return $this;
    }

    /**
     * Get codSoc
     *
     * @return integer
     */
    public function getCodSoc()
    {
        return $this->codSoc;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Article
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set stkmag
     *
     * @param integer $stkmag
     *
     * @return Article
     */
    public function setStkmag($stkmag)
    {
        $this->stkmag = $stkmag;
    
        return $this;
    }

    /**
     * Get stkmag
     *
     * @return integer
     */
    public function getStkmag()
    {
        return $this->stkmag;
    }

    /**
     * Set charge
     *
     * @param string $charge
     *
     * @return Article
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;
    
        return $this;
    }

    /**
     * Get charge
     *
     * @return string
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set coef
     *
     * @param string $coef
     *
     * @return Article
     */
    public function setCoef($coef)
    {
        $this->coef = $coef;
    
        return $this;
    }

    /**
     * Get coef
     *
     * @return string
     */
    public function getCoef()
    {
        return $this->coef;
    }

    /**
     * Set devise
     *
     * @param string $devise
     *
     * @return Article
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
     * Set const
     *
     * @param string $const
     *
     * @return Article
     */
    public function setConst($const)
    {
        $this->const = $const;
    
        return $this;
    }

    /**
     * Get const
     *
     * @return string
     */
    public function getConst()
    {
        return $this->const;
    }

    /**
     * Set refCode
     *
     * @param string $refCode
     *
     * @return Article
     */
    public function setRefCode($refCode)
    {
        $this->refCode = $refCode;
    
        return $this;
    }

    /**
     * Get refCode
     *
     * @return string
     */
    public function getRefCode()
    {
        return $this->refCode;
    }

    /**
     * Set prixEuro
     *
     * @param string $prixEuro
     *
     * @return Article
     */
    public function setPrixEuro($prixEuro)
    {
        $this->prixEuro = $prixEuro;
    
        return $this;
    }

    /**
     * Get prixEuro
     *
     * @return string
     */
    public function getPrixEuro()
    {
        return $this->prixEuro;
    }

    /**
     * Set prixGros
     *
     * @param string $prixGros
     *
     * @return Article
     */
    public function setPrixGros($prixGros)
    {
        $this->prixGros = $prixGros;
    
        return $this;
    }

    /**
     * Get prixGros
     *
     * @return string
     */
    public function getPrixGros()
    {
        return $this->prixGros;
    }

    /**
     * Set marge1
     *
     * @param string $marge1
     *
     * @return Article
     */
    public function setMarge1($marge1)
    {
        $this->marge1 = $marge1;
    
        return $this;
    }

    /**
     * Get marge1
     *
     * @return string
     */
    public function getMarge1()
    {
        return $this->marge1;
    }

    /**
     * Set marge2
     *
     * @param string $marge2
     *
     * @return Article
     */
    public function setMarge2($marge2)
    {
        $this->marge2 = $marge2;
    
        return $this;
    }

    /**
     * Get marge2
     *
     * @return string
     */
    public function getMarge2()
    {
        return $this->marge2;
    }

    /**
     * Set marge3
     *
     * @param string $marge3
     *
     * @return Article
     */
    public function setMarge3($marge3)
    {
        $this->marge3 = $marge3;
    
        return $this;
    }

    /**
     * Get marge3
     *
     * @return string
     */
    public function getMarge3()
    {
        return $this->marge3;
    }


    /**
     * Set cal
     *
     * @param string $cal
     *
     * @return Article
     */
    public function setCal($cal)
    {
        $this->cal = $cal;
    
        return $this;
    }

    /**
     * Get cal
     *
     * @return string
     */
    public function getCal()
    {
        return $this->cal;
    }

    /**
     * Set pr
     *
     * @param string $pr
     *
     * @return Article
     */
    public function setPr($pr)
    {
        $this->pr = $pr;
    
        return $this;
    }

    /**
     * Get pr
     *
     * @return string
     */
    public function getPr()
    {
        return $this->pr;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Article
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set typeArt
     *
     * @param string $typeArt
     *
     * @return Article
     */
    public function setTypeArt($typeArt)
    {
        $this->typeArt = $typeArt;
    
        return $this;
    }

    /**
     * Get typeArt
     *
     * @return string
     */
    public function getTypeArt()
    {
        return $this->typeArt;
    }

    /**
     * Set fournisseur
     *
     * @param \HomeBundle\Entity\Fournisseur $fournisseur
     *
     * @return Article
     */
    public function setFournisseur(\HomeBundle\Entity\Fournisseur $fournisseur = null)
    {
        $this->fournisseur = $fournisseur;
    
        return $this;
    }

    /**
     * Get fournisseur
     *
     * @return \HomeBundle\Entity\Fournisseur
     */
    public function getFournisseur()
    {
        return $this->fournisseur;
    }

    /**
     * Set familleArticle
     *
     * @param \HomeBundle\Entity\FamilleArticle $familleArticle
     *
     * @return Article
     */
    public function setFamilleArticle(\HomeBundle\Entity\FamilleArticle $familleArticle = null)
    {
        $this->familleArticle = $familleArticle;
    
        return $this;
    }

    /**
     * Get familleArticle
     *
     * @return \HomeBundle\Entity\FamilleArticle
     */
    public function getFamilleArticle()
    {
        return $this->familleArticle;
    }
}
