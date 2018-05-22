<?php

namespace AppBundle\Controller\User;


use AppBundle\Form\Type\User\Authentication\AuthenticateType;
use SensioLabs\Security\Exception\RuntimeException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthenticationController extends Controller
{
    public function authenticateAction()
    {
        $form = $this->createForm(AuthenticateType::class);

        return $this->render('@Page/User/Authentication/authenticate.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function checkAction()
    {
        throw new RuntimeException('Should never be called');
    }

    public function logoutAction()
    {
        throw new RuntimeException('Should never be called');
    }
}
