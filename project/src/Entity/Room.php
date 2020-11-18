<?php

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoomRepository::class)
 */
class Room
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
     * @ORM\Column(type="string", length=255)
     */
    private $room_name;

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

    public function getRoomName(): ?string
    {
        return $this->room_name;
    }

    public function setRoomName(string $room_name): self
    {
        $this->room_name = $room_name;

        return $this;
    }
}
