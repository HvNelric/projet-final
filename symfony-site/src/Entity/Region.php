<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegionRepository")
 */
class Region
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $region;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="App\Entity\Sejour", mappedBy="region_sejour")
     */
    private $sejour_region;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="region")
     */
    private $user_region;

    public function __construct () {
        $this->user_region = new ArrayCollection();
        $this->sejour_region = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     * @return Region
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getUserRegion()
    {
        return $this->user_region;
    }

    /**
     * @param ArrayCollection $user_region
     * @return Region
     */
    public function setUserRegion(ArrayCollection $user_region)
    {
        $this->user_region = $user_region;
        return $this;
    }

    public function addUserRegion($user_region)
    {
        $this->user_region->add($user_region);
    }

    /**
     * @return ArrayCollection
     */
    public function getSejourRegion()
    {
        return $this->sejour_region;
    }

    /**
     * @param ArrayCollection $sejour_region
     * @return Region
     */
    public function setSejourRegion(ArrayCollection $sejour_region): Region
    {
        $this->sejour_region = $sejour_region;
        return $this;
    }

    public function __toString()
    {
        return $this->region;
    }
}
