<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class StatPeriodiqueType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('periode',ChoiceType::class, array(
            'choices' => array(
                'semestre 1' => 'semestre 1',
                'semestre 2' => 'semestre 2',
                'trimestre 1' => 'trimestre 1',
                'trimestre 2' => 'trimestre 2',
                'trimestre 3' => 'trimestre 3'
            ))
            )
        ->add('effectifTotal')
        ->add('moyenne')
        ->add('nombreApprenantAyantMoyenne')
        ->add('anneeScolaire')
        ->add('sousClasse', EntityType::class,array(
          'class' => 'AppBundle:SousClasse',
        'choice_label' => 'libelleSousClasse'
    ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\StatPeriodique'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_statperiodique';
    }


}
