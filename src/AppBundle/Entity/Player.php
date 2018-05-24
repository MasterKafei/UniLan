<?php

namespace AppBundle\Entity;

/**
 * Player
 */
class Player
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var bool
     */
    private $has4G;

    /**
     * @var bool
     */
    private $hasVPN;

    /**
     * @var string
     */
    private $gamesLicense;

    /**
     * @var integer
     */
    private $point;

    /**
     * @var Edition[]
     */
    private $editions;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Player
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Player
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return Player
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set has4G
     *
     * @param boolean $has4G
     *
     * @return Player
     */
    public function setHas4G($has4G)
    {
        $this->has4G = $has4G;

        return $this;
    }

    /**
     * Get has4G
     *
     * @return bool
     */
    public function getHas4G()
    {
        return $this->has4G;
    }

    /**
     * Set gamesLicense
     *
     * @param string $gamesLicense
     *
     * @return Player
     */
    public function setGamesLicense($gamesLicense)
    {
        $this->gamesLicense = $gamesLicense;

        return $this;
    }

    /**
     * Get gamesLicense
     *
     * @return string
     */
    public function getGamesLicense()
    {
        return $this->gamesLicense;
    }

    /**
     * Set point
     *
     * @param $point
     * @return $this
     */
    public function setPoint($point)
    {
        $this->point = $point;

        return $this;
    }

    /**
     * Get point
     *
     * @return int
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * Set hasVPN
     *
     * @param $hasVPN
     * @return $this
     */
    public function setHasVPN($hasVPN)
    {
        $this->hasVPN = $hasVPN;
        return $this;
    }

    /**
     * Get hasVPN
     *
     * @return bool
     */
    public function hasVPN()
    {
        return $this->hasVPN;
    }

    /**
     * Set editions
     *
     * @param $editions
     * @return Player
     */
    public function setEditions($editions)
    {
        $this->editions = $editions;

        return $this;
    }

    /**
     * Get editions
     *
     * @return Edition[]
     */
    public function getEditions()
    {
        return $this->editions;
    }
}