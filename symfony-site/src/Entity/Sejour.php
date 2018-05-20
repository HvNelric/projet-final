<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SejourRepository")
 */
class Sejour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     *
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @var ArrayCollection
     * @ORM\ManyToOne(targetEntity="App\Entity\Activites", inversedBy="sejour_activites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activites_sejour;

    /**
     * @var ArrayCollection
     * @ORM\ManyToOne(targetEntity="App\Entity\Region", inversedBy="sejour_region")
     * @ORM\JoinColumn(nullable=false)
     */
    private $region_sejour;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="App\Entity\Reservation", mappedBy="sejour")
     */
    private $sejour_reservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_depart;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hebergement;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $transport;

    public function __construct () {
        $this->activites_sejour = new ArrayCollection();
        $this->region_sejour = new ArrayCollection();
        $this->sejour_reservation = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="integer")
     */
    private $duree;

    public function getId()
    {
        return $this->id;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDateDepart()
    {
        return $this->date_depart;
    }

    public function setDateDepart(\DateTimeInterface $date_depart): self
    {
        $this->date_depart = $date_depart;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHebergement()
    {
        return $this->hebergement;
    }

    public function setHebergement(string $hebergement): self
    {
        $this->hebergement = $hebergement;

        return $this;
    }

    public function getTransport()
    {
        return $this->transport;
    }

    public function setTransport(string $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getSejourReservation()
    {
        return $this->sejour_reservation;
    }

    /**
     * @param ArrayCollection $sejour_reservation
     * @return Sejour
     */
    public function setSejourReservation(ArrayCollection $sejour_reservation)
    {
        $this->sejour_reservation = $sejour_reservation;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getActivitesSejour()
    {
        return $this->activites_sejour;
    }

    /**
     * @param ArrayCollection $activites_sejour
     * @return Sejour
     */
    public function setActivitesSejour(ArrayCollection $activites_sejour): Sejour
    {
        $this->activites_sejour = $activites_sejour;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getRegionSejour()
    {
        return $this->region_sejour;
    }

    /**
     * @param ArrayCollection $region_sejour
     * @return Sejour
     */
    public function setRegionSejour(ArrayCollection $region_sejour): Sejour
    {
        $this->region_sejour = $region_sejour;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     * @return Sejour
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }
}
