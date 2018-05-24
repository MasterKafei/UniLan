<?php

namespace AppBundle\Entity;

/**
 * Edition
 */
class Edition
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var Player[]
     */
    private $players;

    /**
     * @var Game[]
     */
    private $games;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Edition
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set players
     *
     * @param Player[] $players
     *
     * @return Edition
     */
    public function setPlayers($players)
    {
        $this->players = $players;

        return $this;
    }

    /**
     * Get players
     *
     * @return Player[]
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * Set games
     *
     * @param Game[] $games
     *
     * @return Edition
     */
    public function setGames($games)
    {
        $this->games = $games;

        return $this;
    }

    /**
     * Get games
     *
     * @return Game[]
     */
    public function getGames()
    {
        return $this->games;
    }

    public function addPlayer(Player $player)
    {
        $this->players[] = $player;
        return $this;
    }

    public function addGame(Game $game)
    {
        $this->games[] = $game;
        return $this;
    }
}

