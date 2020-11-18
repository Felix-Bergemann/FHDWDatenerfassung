<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $int_key;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    private $Wlan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $user_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pass;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntKey(): ?int
    {
        return $this->int_key;
    }

    public function setIntKey(int $int_key): self
    {
        $this->int_key = $int_key;

        return $this;
    }

    public function getWlan()
    {
        return $this->Wlan;
    }

    public function setWlan($Wlan): self
    {
        $this->Wlan = $Wlan;

        return $this;
    }

    public function getUserName(): ?string
    {
        return $this->user_name;
    }

    public function setUserName(string $user_name): self
    {
        $this->user_name = $user_name;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }
}
