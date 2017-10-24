<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FamilleArticle
 *
 * @ORM\Table(name="famille_article")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\FamilleArticleRepository")
 */
class FamilleArticle
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
     * @ORM\Column(name="nom_famille", type="string", length=50, unique=true)
     */
    private $nomFamille;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomFamille
     *
     * @param string $nomFamille
     *
     * @return FamilleArticle
     */
    public function setNomFamille($nomFamille)
    {
        $this->nomFamille = $nomFamille;
    
        return $this;
    }

    /**
     * Get nomFamille
     *
     * @return string
     */
    public function getNomFamille()
    {
        return $this->nomFamille;
    }
}

