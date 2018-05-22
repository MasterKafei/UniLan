<?php

namespace AppBundle\Service\Listener;


use AppBundle\Entity\SurveyResponse;
use AppBundle\Service\Util\AbstractContainerAware;
use Doctrine\ORM\Event\LifecycleEventArgs;

class SurveyResponseListener extends AbstractContainerAware
{
    public function prePersist(SurveyResponse $response, LifecycleEventArgs $args)
    {
        $this->container->get('app.business.survey_response')->surveyResponseSend($response);
    }
}
