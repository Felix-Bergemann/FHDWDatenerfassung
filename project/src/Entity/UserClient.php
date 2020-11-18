<?php

namespace App\Entity;

use App\Repository\UserClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserClientRepository::class)
 */
class UserClient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    private $User;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    private $Client;

    /**
     * @ORM\Column(type="object", nullable=true)
     */
    private $Room;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $temperature;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $humidity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $air_pressure;

    /**
     * @ORM\Column(type="object")
     */
    private $record_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->User;
    }

    public function setUser($User): self
    {
        $this->User = $User;

        return $this;
    }

    public function getClient()
    {
        return $this->Client;
    }

    public function setClient($Client): self
    {
        $this->Client = $Client;

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

    public function getTemperature(): ?int
    {
        return $this->temperature;
    }

    public function setTemperature(?int $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getHumidity(): ?string
    {
        return $this->humidity;
    }

    public function setHumidity(string $humidity): self
    {
        $this->humidity = $humidity;

        return $this;
    }

    public function getAirPressure(): ?string
    {
        return $this->air_pressure;
    }

    public function setAirPressure(?string $air_pressure): self
    {
        $this->air_pressure = $air_pressure;

        return $this;
    }

    public function getRecordDate()
    {
        return $this->record_date;
    }

    public function setRecordDate($record_date): self
    {
        $this->record_date = $record_date;

        return $this;
    }
}