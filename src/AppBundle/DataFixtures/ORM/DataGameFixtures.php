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

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Fornite');

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Assault Cube');

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Minecraft');

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Mario Kart');

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Heroes of the Storm');

        $game = new Game();
        $game
            ->setName('Hearthstone');

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('League of Legends');

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Astroneer');

        $manager->persist($game);

        $game = new Game();
        $game
            ->setName('Super Smash Bros 4 Wii U');

        $manager->persist($game);

        $manager->flush();
    }

    public function getOrder()
    {
        return 0;
    }
}
