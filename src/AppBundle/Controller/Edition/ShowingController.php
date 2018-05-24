<?php

namespace AppBundle\Controller\Edition;


use AppBundle\Entity\Edition;
use AppBundle\Entity\Player;
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
        $editions = $this->getDoctrine()->getRepository(Edition::class)->findAll();
        $allEditionPlayers = array();
        $now = new \DateTime();
        foreach ($editions as $edition) {
            foreach ($edition->getPlayers() as $player) {
                $key = $player->getPseudo();
                if (array_key_exists($key, $allEditionPlayers)) {
                    $allEditionPlayers[$key]->setPoint($player->getPoint() + $allEditionPlayers[$key]->getPoint());
                } else {
                    $allEditionPlayers[$key] = new Player($player);
                }
            }
        }

        usort($allEditionPlayers, function($a, $b)
        {
           if ($a->getPoint() == $b->getPoint()) {
              return 0;
           }

           return $a->getPoint() < $b->getPoint() ? 1 : -1;
        });

        return $this->render('@Page/Edition/Showing/stats.html.twig',array(
            'editions' => $editions,
            'all_editions_players' => $allEditionPlayers,
        ));
    }
}
