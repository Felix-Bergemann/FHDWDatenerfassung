<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="int_key", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_name", type="string", length=255, nullable=true)
     */
    private $userName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass", type="string", length=255, nullable=true)
     */
    private $pass;

    public function getIntKey(): ?int
    {
        return $this->intKey;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(?string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(?string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    public function getSalt()
    {
        return null;
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

     /** @see \Serializable::serialize() */
     public function serialize()
     {
         return serialize(array(
             $this->intKey,
             $this->userName,
             $this->pass,
             // see section on salt below
             // $this->salt,
         ));
     }

     /** @see \Serializable::unserialize() */
     public function unserialize($serialized)
     {
         list (
            $this->intKey,
            $this->userName,
            $this->pass,
             // see section on salt below
             // $this->salt
         ) = unserialize($serialized, array('allowed_classes' => false));
     }
}