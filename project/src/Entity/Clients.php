<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 * 
 */
class Clients
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
    private $Room;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    private $Wlan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mac_address;

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

    public function getRoom()
    {
        return $this->Room;
    }

    public function setRoom($Room): self
    {
        $this->Room = $Room;

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

    public function getMacAddress(): ?string
    {
        return $this->mac_address;
    }

    public function setMacAddress(string $mac_address): self
    {
        $this->mac_address = $mac_address;

        return $this;
    }
}
