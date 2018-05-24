<?php

namespace AppBundle\Entity;

/**
 * Game
 */
class Game
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var SurveyResponse[]
     */
    private $surveyResponses;

    /**
     * @var Player[]
     */
    private $playersLicense;

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
     * Set name
     *
     * @param string $name
     *
     * @return Game
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surveyResponses
     *
     * @param SurveyResponse[] $surveyResponses
     * @return Game
     */
    public function setSurveyResponses($surveyResponses)
    {
        $this->surveyResponses = $surveyResponses;

        return $this;
    }

    /**
     *
     * @return SurveyResponse[]
     */
    public function getSurveyResponses()
    {
        return $this->surveyResponses;
    }


    /**
     * Set playersLicense.
     *
     * @param $playersLicense
     * @return Game
     */
    public function setPlayersLicense($playersLicense)
    {
        $this->playersLicense = $playersLicense;

        return $this;
    }

    /**
     * Get playersLicense.
     *
     * @return Player[]
     */
    public function getPlayersLicense()
    {
        return $this->playersLicense;
    }

    /**
     * Set editions
     *
     * @param $editions
     * @return Game
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

