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
            (new Player())->setFirstName('Jean')->setLastName('Marius')->setPseudo('MasterKafei')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Dorian')->setLastName('Guilmain')->setPseudo('Craaftx')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Romain')->setLastName('Belot')->setPseudo('Hundil')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Oulian')->setLastName('Semille')->setPseudo('Nerva')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Oliver')->setLastName('Argentieri')->setPseudo('Nunutte')->setPoint(rand(0, 100)),
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
            (new Player())->setFirstName('Jean')->setLastName('Marius')->setPseudo('MasterKafei')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Dorian')->setLastName('Guilmain')->setPseudo('Craaftx')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Romain')->setLastName('Belot')->setPseudo('Hundil')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Oulian')->setLastName('Semille')->setPseudo('Nerva')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Pierre-Louis')->setLastName('D')->setPseudo('pld')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Nicolas')->setLastName('Jeanne')->setPseudo('Meedle_')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Anne-Sophie')->setLastName('Cousteix')->setPseudo('Etoily')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Vincent')->setLastName('Lancelot')->setPseudo('Vlancelot')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Lucas')->setLastName('Seguret')->setPseudo('Killua')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Paul')->setLastName('Marius')->setPseudo('Paolo')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Nicolas')->setLastName('Lorrain')->setPseudo('Idioman')->setPoint(rand(0, 100)),
            (new Player())->setFirstName('Antoine-Marie')->setLastName('Besrnard')->setPseudo('Vanialy')->setPoint(rand(0, 100)),
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
