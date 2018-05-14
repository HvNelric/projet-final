<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\GroupeRepository")
 */
class Groupe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_groupe;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_fin;

    /**
     * @ORM\Column(type="integer")
     */
    private $tags_id_tag;

    public function getId()
    {
        return $this->id;
    }

    public function getNbGroupe()
    {
        return $this->nb_groupe;
    }

    public function setNbGroupe(int $nb_groupe): self
    {
        $this->nb_groupe = $nb_groupe;

        return $this;
    }

    public function getDateDebut()
    {
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDateFin()
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getTagsIdTag()
    {
        return $this->tags_id_tag;
    }

    public function setTagsIdTag(int $tags_id_tag): self
    {
        $this->tags_id_tag = $tags_id_tag;

        return $this;
    }
}
