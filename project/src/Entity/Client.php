<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
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
     * @ORM\Column(name="room_ik", type="integer", nullable=true)
     */
    private $roomIk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="owning_user_ik", type="integer", nullable=true)
     */
    private $owningUserIk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mac_adress", type="string", length=255, nullable=true)
     */
    private $macAdress;

    public function getIntKey(): ?int
    {
        return $this->intKey;
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

    public function getOwningUserIk(): ?int
    {
        return $this->owningUserIk;
    }

    public function setOwningUserIk(?int $owningUserIk): self
    {
        $this->owningUserIk = $owningUserIk;

        return $this;
    }

    public function getMacAdress(): ?string
    {
        return $this->macAdress;
    }

    public function setMacAdress(?string $macAdress): self
    {
        $this->macAdress = $macAdress;

        return $this;
    }


}
