<?php
/**
 * Created by PhpStorm.
 * User: TheMa
 * Date: 17/02/2018
 * Time: 16:00
 */

namespace AppBundle\Service\Business;

use AppBundle\Entity\User;
use AppBundle\Service\Util\AbstractContainerAware;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class UserBusiness extends AbstractContainerAware
{

    /**
     * Hash a password with hash strategy defined in security
     *
     * @param User $user
     *
     * @return string
     * @throws \Exception
     */
    public function hashPassword(User $user)
    {
        if (null === $user->getPlainPassword()) {
            throw new \Exception('Plain password can\'t be null');
        }

        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
        $password = $encoder->encodePassword($user->getPlainPassword(), $user->getSalt());
        $user->setPassword($password);

        return $password;
    }

    /**
     * Get current authenticated user
     *
     * @return User
     */
    public function getCurrentUser()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        if ($user instanceof User) {
            return $user;
        }

        return null;
    }
}