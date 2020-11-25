<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Room
 *
 * @ORM\Table(name="room")
 * @ORM\Entity
 */
class Room
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
     * @ORM\Column(name="user_ik", type="integer", nullable=true)
     */
    private $userIk;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_private", type="boolean", nullable=true)
     */
    private $isPrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="room_name", type="string", length=255, nullable=true)
     */
    private $roomName;

    public function getIntKey(): ?int
    {
        return $this->intKey;
    }

    public function getUserIk(): ?int
    {
        return $this->userIk;
    }

    public function setUserIk(?int $userIk): self
    {
        $this->userIk = $userIk;

        return $this;
    }

    public function getIsPrivate(): ?bool
    {
        return $this->isPrivate;
    }

    public function setIsPrivate(?bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    public function getRoomName(): ?string
    {
        return $this->roomName;
    }

    public function setRoomName(?string $roomName): self
    {
        $this->roomName = $roomName;

        return $this;
    }


}
