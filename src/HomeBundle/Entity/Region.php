<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\RegionRepository")
 */
class Region
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
     * @ORM\Column(name="region", type="string", length=50, unique=true)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="prefixe_tel", type="string", length=10, nullable=true, unique=true)
     */
    private $prefixeTel;


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
     * Set region
     *
     * @param string $region
     *
     * @return Region
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
     * Set prefixeTel
     *
     * @param string $prefixeTel
     *
     * @return Region
     */
    public function setPrefixeTel($prefixeTel)
    {
        $this->prefixeTel = $prefixeTel;

        return $this;
    }

    /**
     * Get prefixeTel
     *
     * @return string
     */
    public function getPrefixeTel()
    {
        return $this->prefixeTel;
    }
}

