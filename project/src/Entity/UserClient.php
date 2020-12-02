<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserClient
 *
 * @ORM\Table(name="user_client")
 * @ORM\Entity
 */
class UserClient
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="user_ik", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userIk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="client_ik", type="integer", nullable=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $clientIk;

    public function getUserIk(): ?int
    {
        return $this->userIk;
    }

    public function getClientIk(): ?int
    {
        return $this->clientIk;
    }

    /**
     * Set the value of userIk
     *
     * @param  int|null  $userIk
     *
     * @return  self
     */
    public function setUserIk($userIk)
    {
        $this->userIk = $userIk;

        return $this;
    }

    /**
     * Set the value of clientIk
     *
     * @param  int|null  $clientIk
     *
     * @return  self
     */
    public function setClientIk($clientIk)
    {
        $this->clientIk = $clientIk;

        return $this;
    }
}
