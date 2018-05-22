<?php

namespace AppBundle\Controller\SurveyResponse;

use AppBundle\Entity\SurveyResponse;
use AppBundle\Form\Type\SurveyResponse\Creation\SurveyResponseCreate;
use AppBundle\Service\Util\Console\Model\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CreationController extends Controller
{

    public function createSurveyResponseAction(Request $request)
    {
        $surveyResponse = new SurveyResponse();
        $form = $this->createForm(SurveyResponseCreate::class, $surveyResponse);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($this->container->get('app.business.survey_response')->isOneSurveyResponseSend()) {
                $this->container->get('app.util.console')->add('survey_response.creation.create.already_send', Message::TYPE_DANGER, 'fas fa-times');
                return $this->redirectToRoute('app_home_showing_show');
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($surveyResponse);
            $em->flush();
            $this->get('app.util.console')->add('survey_response.creation.create.success', Message::TYPE_SUCCESS, 'fas fa-check');
        }

        if ($this->get('app.business.request')->isMasterRequest()) {
            return $this->redirectToRoute('app_home_showing_show');
        }

        return $this->render('@Page/SurveyResponse/Creation/create.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
