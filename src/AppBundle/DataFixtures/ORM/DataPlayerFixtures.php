<?php

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Player;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DataPlayerFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $player = new Player();

        $player
            ->setFirstName('Jean')
            ->setLastName('Marius')
            ->setPseudo('MasterKafei')
            ->setHas4G(false)
            ->setHasVPN(true)
            ->setPoint(rand(0, 100));

        $this->addReference('player jean marius', $player);

        $manager->persist($player);

        $player = new Player();

        $player
            ->setFirstName('Dorian')
            ->setLastName('Guilmain')
            ->setPseudo('Craaftx')
            ->setHas4G(true)
            ->setHasVPN(true)
            ->setPoint(rand(0, 100));

        $this->addReference('player dorian guilmain', $player);

        $manager->persist($player);

        $player = new Player();

        $player
            ->setFirstName('Romain')
            ->setLastName('Belot')
            ->setPseudo('Hundil')
            ->setHas4G(true)
            ->setHasVPN(false)
            ->setPoint(rand(0, 100));

        $this->addReference('player romain belot', $player);

        $manager->persist($player);

        $player = new Player();

        $player
            ->setFirstName('Oulian')
            ->setLastName('Semille')
            ->setPseudo('Nerva')
            ->setHas4G(true)
            ->setHasVPN(false)
            ->setPoint(rand(0, 100));

        $this->addReference('player oulian semille', $player);

        $manager->persist($player);

        $manager->flush();
    }

    public function getOrder()
    {
        return 0;
    }
}
