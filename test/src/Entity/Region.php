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
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="region")
     */
    private $user_region;

    public function __construct () {
        $this->user_region = new ArrayCollection();
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

    public function __toString()
    {
        return $this->region;
    }
}
