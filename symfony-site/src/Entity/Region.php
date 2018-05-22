<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegionRepository")
 * @UniqueEntity(fields="region", message="il existe déjà une region de ce nom")
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
     * @ORM\Column(type="string", length=255, unique=true)
     * Validation :
     * -non vide
     * * @Assert\NotBlank(message="Le nom est obligatoire")
     * - nombre de caractères
     * @Assert\Length(max="255", maxMessage="Le nom ne doit pas dépasser {{ limit }} caractères")
     */
    private $region;

    /**
     * var ArrayCollection
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

    public function getRegion()
    {
        return $this->region;
    }


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
    public function setUserRegion($user_region)
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
    public function setSejourRegion($sejour_region): Region
    {
        $this->sejour_region = $sejour_region;
        return $this;
    }

    public function __toString()
    {
        return $this->region;
    }
}
