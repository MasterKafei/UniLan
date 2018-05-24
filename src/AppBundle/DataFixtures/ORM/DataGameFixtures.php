<?php

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Game;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;

class DataGameFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $game = new Game();
        $game
            ->setName('Overwatch');

        $this->addReference('game overwatch', $game);

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Fortnite');

        $this->addReference('game fornite', $game);

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Assault Cube');

        $this->addReference('game assault cube', $game);

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Minecraft');

        $this->addReference('game minecraft', $game);

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Mario Kart');

        $this->addReference('game mario kart', $game);

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Heroes of the Storm');

        $this->addReference('game heroes of the storm', $game);

        $game = new Game();
        $game
            ->setName('Hearthstone');

        $this->addReference('game hearthstone', $game);

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('League of Legends');

        $this->addReference('game league of legends', $game);

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Astroneer');

        $this->addReference('game astroneer', $game);

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Super Smash Bros 4 Wii U');

        $this->addReference('game super smash bros 4 wii u', $game);

        $manager->persist($game);

        $manager->flush();
    }

    public function getOrder()
    {
        return 0;
    }
}
