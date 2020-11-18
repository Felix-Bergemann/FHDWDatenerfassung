<?php

namespace App\Entity;

use App\Repository\WlanRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WlanRepository::class)
 */
class Wlan
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ssid;

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

    public function getSsid(): ?string
    {
        return $this->ssid;
    }

    public function setSsid(?string $ssid): self
    {
        $this->ssid = $ssid;

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
