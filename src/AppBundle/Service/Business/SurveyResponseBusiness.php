<?php

namespace AppBundle\Service\Business;


use AppBundle\Service\Util\AbstractContainerAware;

class SurveyResponseBusiness extends AbstractContainerAware
{
    const SURVEY_RESPONSE_SEND_KEY = 'survey_response_send';

    public function isOneSurveyResponseSend()
    {
        return $this->container->get('session')->get(SurveyResponseBusiness::SURVEY_RESPONSE_SEND_KEY) != null;
    }

    public function surveyResponseSend($surveyResponseSend)
    {
        $this->container->get('session')->set(SurveyResponseBusiness::SURVEY_RESPONSE_SEND_KEY, $surveyResponseSend);
    }
}
