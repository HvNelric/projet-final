<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Api;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ReservationRepository")
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var ArrayCollection
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="reservation")
     */
    private $user_reservation;

    /**
     * @var ArrayCollection
     * @ORM\ManyToOne(targetEntity="App\Entity\Sejour", inversedBy="sejour_reservation")
     */
    private $sejour;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $reservation_date;

    public function getId()
    {
        return $this->id;
    }

    public function getReservationDate()
    {
        return $this->reservation_date;
    }

    public function setReservationDate(\DateTimeInterface $reservation_date): self
    {
        $this->reservation_date = $reservation_date;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getUserReservation()
    {
        return $this->user_reservation;
    }

    /**
     * @param ArrayCollection $user_reservation
     * @return Reservation
     */
    public function setUserReservation(ArrayCollection $user_reservation)
    {
        $this->user_reservation = $user_reservation;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getSejour(): ArrayCollection
    {
        return $this->sejour;
    }

    /**
     * @param ArrayCollection $sejour
     * @return Reservation
     */
    public function setSejour(ArrayCollection $sejour)
    {
        $this->sejour = $sejour;
        return $this;
    }


}
