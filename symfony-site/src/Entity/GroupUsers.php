<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GroupUsersRepository")
 */
class GroupUsers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer") //////////////////////////////////////////////////////////// définir relation
     */
    private $user_id_user;

    public function getId()
    {
        return $this->id;
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
}
