<?php

namespace AppBundle\Service\Listener;


use AppBundle\Entity\User;
use AppBundle\Service\Util\AbstractContainerAware;
use Doctrine\ORM\Event\LifecycleEventArgs;

class UserListener extends AbstractContainerAware
{
    public function prePersist(User $user, LifecycleEventArgs $args)
    {
        $this->hashPassword($user);
    }

    public function preUpdate(User $user, LifecycleEventArgs $args)
    {
        $this->hashPassword($user);
    }

    private function hashPassword($user)
    {
        $this->container->get('app.business.user')->hashPassword($user);
    }
}
