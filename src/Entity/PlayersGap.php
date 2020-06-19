<?php

namespace App\Entity;

use App\Repository\PlayersGapRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlayersGapRepository::class)
 */
class PlayersGap
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="playersGaps")
     * @ORM\JoinColumn(nullable=false)
     */
    private $playerOneId;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
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

    public function getPlayerOneId(): ?User
    {
        return $this->playerOneId;
    }

    public function setPlayerOneId(?User $playerOneId): self
    {
        $this->playerOneId = $playerOneId;

        return $this;
    }

    public function getPlayerTwoId(): ?User
    {
        return $this->playerTwoId;
    }

    public function setPlayerTwoId(?User $playerTwoId): self
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
