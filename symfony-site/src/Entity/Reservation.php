<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
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
     * @ORM\Column(type="date")
     */
    private $date_reservation;

    /**
     * @ORM\Column(type="integer")
     */
    private $date_depart;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $duree;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="integer")  /////////////////////////////////////////////////// relation à definir
     */
    private $user_id_user;

    /**
     * @ORM\Column(type="integer") ////////////////////////////////////////////////// relation à definir
     */
    private $sejour_idsejour;

    public function getId()
    {
        return $this->id;
    }

    public function getDateReservation()
    {
        return $this->date_reservation;
    }

    public function setDateReservation(\DateTimeInterface $date_reservation): self
    {
        $this->date_reservation = $date_reservation;

        return $this;
    }

    public function getDateDepart()
    {
        return $this->date_depart;
    }

    public function setDateDepart(string $date_depart): self
    {
        $this->date_depart = $date_depart;

        return $this;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getUserIdUser()
    {
        return $this->user_id_user;
    }

    public function setUserIdUser(int $user_id_user): self
    {
        $this->user_id_user = $user_id_user;

        return $this;
    }

    public function getSejourIdsejour()
    {
        return $this->sejour_idsejour;
    }

    public function setSejourIdsejour(int $sejour_idsejour): self
    {
        $this->sejour_idsejour = $sejour_idsejour;

        return $this;
    }
}
