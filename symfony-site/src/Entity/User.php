<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="Il existe déjà un utilisateur avec cet email")
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var ArrayCollection
     * relation n-n entre user et appartient définie sur l'atribut user_id_user
     * ////////////////////////////////////////////////////////////////////////////////////////////////// à définir /////@ORM\OneToMany(targetEntity="", mappedBy)
     */
    private $tags_id_tag;  /////////////////////////////////////////////////////////////////////////////// getters setters à definir


    /**
     * @ORM\Column(type="string", length=20)
     */
    private $role = 'ROLE_USER';

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(message="L'email est obligatoire")
     * @Assert\Email(message="Cet email n'est pas valide")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @var string
     * @Assert\NotBlank(message="Le mot de passe est obligatoire")
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Le nom est obligatoire")
     * @Assert\Length(max="100", maxMessage="Le prénom ne doit pas dépasser {{ limit }} caractères")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Le nom ne doit pas dépasser {{ limit }} caractères")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

////////////////////////////////////////////////// Getters Setters
    public function getRole()
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        return $this;
    }

    public function getCivilite()
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    ////////////////////////////////////////// Methodes

    // Transforme l'objet en chaine de caractère normée
    public function serialize(): string
    {
        return serialize(
          [
              $this->id,
              $this->email,
              $this->password,
              $this->prenom,
              $this->nom,
              $this->adresse,
              $this->cp,
              $this->ville
          ]
        );
    }

    /**
     * Transforme une chaine générée par serialize()
     *
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->email,
            $this->password,
            $this->prenom,
            $this->nom,
            $this->adresse,
            $this->cp,
            $this->ville
            ) = unserialize($serialized);
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function getRoles()
    {
        return [$this->role];
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function getSalt()
    {
        return null;
    }

    public function getFullname()
    {
        return trim($this->prenom . ' ' . $this->nom);
    }

    public function __toString()
    {
        return $this->getFullname();
    }
}
