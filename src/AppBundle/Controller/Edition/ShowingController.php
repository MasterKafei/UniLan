<?php

namespace AppBundle\Controller\Edition;


use AppBundle\Entity\Edition;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShowingController extends Controller
{
    public function ShowEditionController(Edition $edition, $editionNumber = 1)
    {
        return $this->render('@Page/Edition/Showing/show.html.twig', array(
            'edition' => $edition,
            'edition_number' => $editionNumber
        ));
    }

    public function showStatsAction()
    {
        return $this->render('@Page/Edition/Showing/stats.html.twig');
    }
}
