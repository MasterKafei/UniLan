<?php

namespace AppBundle\Controller\Player;


use AppBundle\Entity\Edition;
use AppBundle\Entity\Player;
use AppBundle\Form\Type\Player\PlayerCreationType;
use AppBundle\Service\Util\Console\Model\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{
    public function creationPlayerAction(Request $request, Edition $edition)
    {
        $player = new Player();

        $form = $this->createForm(PlayerCreationType::class, $player, array('edition' => $edition));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid() && $edition->getDate() > new \DateTime()) {

            $errors = false;
            foreach($edition->getPlayers() as $editionPlayer) {
                if (strtolower($editionPlayer->getPseudo()) === strtolower($player->getPseudo())) {
                   $errors = true;
                }
            }

            if(!$errors)
            {
                $edition->addPlayer($player);
                $em = $this->getDoctrine()->getManager();
                $em->persist($edition);
                $em->flush();
                $this->get('app.util.console')->add('player.creation.create.success', Message::TYPE_SUCCESS, 'fas fa-check');
            } else {
                $this->get('app.util.console')->add('player.creation.create.pseudo_already_used', Message::TYPE_DANGER, 'fas fa-times', array('player_pseudo' => $player->getPseudo()));
            }

        }

        if ($this->get('app.business.request')->isMasterRequest()) {
            return $this->forward('AppBundle:Home:index', array('focus' => 'tournament'));
        }

        return $this->render('@Page/Player/Creation/create.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
