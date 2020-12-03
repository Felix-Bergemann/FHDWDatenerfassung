<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientRecord
 *
 * @ORM\Table(name="client_record")
 * @ORM\Entity
 */
class ClientRecord
{
    /**
     * @var int
     *
     * @ORM\Column(name="int_key", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="client_ik", type="integer", nullable=true)
     */
    private $clientIk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="room_ik", type="integer", nullable=true)
     */
    private $roomIk;

    /**
     * @var float|null
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=true)
     */
    private $temperature;

    /**
     * @var float|null
     *
     * @ORM\Column(name="humidity", type="float", precision=10, scale=0, nullable=true)
     */
    private $humidity;

    /**
     * @var float|null
     *
     * @ORM\Column(name="air_pressure", type="float", precision=10, scale=0, nullable=true)
     */
    private $airPressure;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="record_date", type="date", nullable=true)
     */
    private $recordDate;

    public function getIntKey(): ?int
    {
        return $this->intKey;
    }

    public function getClientIk(): ?int
    {
        return $this->clientIk;
    }

    public function setClientIk(?int $clientIk): self
    {
        $this->clientIk = $clientIk;

        return $this;
    }

    public function getRoomIk(): ?int
    {
        return $this->roomIk;
    }

    public function setRoomIk(?int $roomIk): self
    {
        $this->roomIk = $roomIk;

        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(?float $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getHumidity(): ?float
    {
        return $this->humidity;
    }

    public function setHumidity(?float $humidity): self
    {
        $this->humidity = $humidity;

        return $this;
    }

    public function getAirPressure(): ?float
    {
        return $this->airPressure;
    }

    public function setAirPressure(?float $airPressure): self
    {
        $this->airPressure = $airPressure;

        return $this;
    }

    public function getRecordDate(): ?\DateTimeInterface
    {
        return $this->recordDate;
    }

    public function setRecordDate(?\DateTimeInterface $recordDate): self
    {
        $this->recordDate = $recordDate;

        return $this;
    }


}
