<?php

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DataUserFixtures extends AbstractFixture implements OrderedFixtureInterface
{


    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user
            ->setUsername('webmaster')
            ->setPlainPassword('toto')
            ->setRoles(array('ROLE_USER'));

        $manager->persist($user);

        $manager->flush();
    }

    public function getOrder()
    {
        return 0;
    }
}
