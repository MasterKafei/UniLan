<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Edition;
use AppBundle\Entity\Player;
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

        $players = array(
            (new Player())->setFirstName('Jean')->setLastName('Marius')->setPseudo('MasterKafei')->setPoint(2),
            (new Player())->setFirstName('Dorian')->setLastName('Guilmain')->setPseudo('Craaftx')->setPoint(12),
            (new Player())->setFirstName('Romain')->setLastName('Belot')->setPseudo('Hundil')->setPoint(45),
            (new Player())->setFirstName('Oulian')->setLastName('Semille')->setPseudo('Nerva')->setPoint(31),
        );

        $edition = new Edition();
        $date = new \DateTime();
        $date
            ->setDate(2018,2,25)
            ->setTime(19,0,0);

        $edition
            ->setDate($date)
            ->setGames($games)
            ->setPlayers($players);

        $manager->persist($edition);

        $players = array(
            (new Player())->setFirstName('Jean')->setLastName('Marius')->setPseudo('MasterKafei')->setPoint(12),
            (new Player())->setFirstName('Dorian')->setLastName('Guilmain')->setPseudo('Craaftx')->setPoint(1),
            (new Player())->setFirstName('Romain')->setLastName('Belot')->setPseudo('Hundil')->setPoint(5),
            (new Player())->setFirstName('Oulian')->setLastName('Semille')->setPseudo('Nerva')->setPoint(9),
        );

        $edition = new Edition();
        $date = new \DateTime();
        $date
            ->setDate(2018,1,10)
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
