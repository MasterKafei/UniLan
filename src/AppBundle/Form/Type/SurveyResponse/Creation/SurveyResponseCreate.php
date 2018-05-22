<?php

namespace AppBundle\Form\Type\SurveyResponse\Creation;

use AppBundle\Entity\Game;
use AppBundle\Entity\SurveyResponse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SurveyResponseCreate extends AbstractType
{
    protected $router;

    /**
     * AuthenticateType constructor.
     *
     * @param Router $router
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, array(
                'label' => false,
            ))
            ->add('lastName', TextType::class, array(
                'label' => false,
            ))
            ->add('games', EntityType::class, array(
                'class' => Game::class,
                'choice_label' => 'name',
                'expanded' => true,
                'multiple' => true,
                'translation_domain' => false,
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'vote',
                'translation_domain' => 'action'
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => SurveyResponse::class,
            'translation_domain' => 'label',
            'action' => $this->router->generate('app_survey_response_creation_create'),
        ));
    }
}
