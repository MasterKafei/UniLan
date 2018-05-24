<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction($focus = 'homepage')
    {
        return $this->render('@Page/Home/index.html.twig', array(
            'focus' => $focus,
        ));
    }
}
