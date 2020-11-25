<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wlan
 *
 * @ORM\Table(name="wlan")
 * @ORM\Entity
 */
class Wlan
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
     * @var int|null
     *
     * @ORM\Column(name="ssid", type="integer", nullable=true)
     */
    private $ssid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pass", type="integer", nullable=true)
     */
    private $pass;

    public function getIntKey(): ?int
    {
        return $this->intKey;
    }

    public function getSsid(): ?int
    {
        return $this->ssid;
    }

    public function setSsid(?int $ssid): self
    {
        $this->ssid = $ssid;

        return $this;
    }

    public function getPass(): ?int
    {
        return $this->pass;
    }

    public function setPass(?int $pass): self
    {
        $this->pass = $pass;

        return $this;
    }


}
