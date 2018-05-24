<?php

namespace AppBundle\Form\Type\Player;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\RouterInterface;

class PlayerCreationType extends AbstractType
{
    /**
     * @var RouterInterface
     */
    private $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, array(
                'label' => 'player.creation.first_name',
            ))
            ->add('lastName', TextType::class, array(
                'label' => 'player.creation.last_name',
            ))
            ->add('pseudo', TextType::class, array(
                'label' => 'player.creation.pseudo'
            ))
            ->add('has4G', CheckboxType::class, array(
                'label' => 'player.creation.has_4G',
                'required' => false,
            ))
            ->add('hasVPN', CheckboxType::class, array(
                'label' => 'player.creation.has_VPN',
                'required' => false,
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'subscribe',
                'translation_domain' => 'action'
            ))
            ->setAction($this->router->generate('app_player_creation_create', array('id' => $options['edition']->getId())));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'translation_domain' => 'label',
            'edition' => null,
        ));
    }
}
