<?php

namespace App\Entity;

use App\Repository\TeamPlaysRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TeamPlaysRepository::class)
 */
class TeamPlays
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $playerOneId;

    /**
     * @ORM\Column(type="integer")
     */
    private $playerTwoId;

    /**
     * @ORM\Column(type="integer")
     */
    private $games;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayerOneId(): ?int
    {
        return $this->playerOneId;
    }

    public function setPlayerOneId(int $playerOneId): self
    {
        $this->playerOneId = $playerOneId;

        return $this;
    }

    public function getPlayerTwoId(): ?int
    {
        return $this->playerTwoId;
    }

    public function setPlayerTwoId(int $playerTwoId): self
    {
        $this->playerTwoId = $playerTwoId;

        return $this;
    }

    public function getGames(): ?int
    {
        return $this->games;
    }

    public function setGames(int $games): self
    {
        $this->games = $games;

        return $this;
    }
}
