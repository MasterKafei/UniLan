<?php

namespace AppBundle\Controller\Edition;


use AppBundle\Entity\Edition;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListingController extends Controller
{
    public function listEditionAction()
    {
        $editions = $this->getDoctrine()->getRepository(Edition::class)->findAll();

        return $this->render('@Page/Edition/Listing/list.html.twig',
            array(
                'editions' => $editions,
            )
        );
    }
}
