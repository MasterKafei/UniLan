<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Edition;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DataEditionFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $games = array(
            $this->getReference('game overwatch'),
            $this->getReference('game fornite'),
            $this->getReference('game mario kart'),
            $this->getReference('game super smash bros 4 wii u'),
        );

        $players = array(
            $this->getReference('player jean marius'),
            $this->getReference('player dorian guilmain'),
            $this->getReference('player romain belot'),
            $this->getReference('player oulian semille'),
        );

        $edition = new Edition();
        $date = new \DateTime();
        $date
            ->setDate(2018,5,25)
            ->setTime(19,0,0);

        $edition
            ->setDate($date)
            ->setGames($games)
            ->setPlayers($players);

        $manager->persist($edition);

        $manager->flush();
    }

    public function getOrder()
    {
        return 100;
    }
}
