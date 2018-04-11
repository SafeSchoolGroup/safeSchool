<?php

namespace AppBundle\Form;

use AppBundle\Validator\IsLessThan;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProgrammeCoursType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateProgramme', DateType::class, array(
                'widget' => 'choice',
                'input' => 'datetime',
                'format' => 'yyyy-MM-dd',
                'html5' => true
            ))
            ->add('heureDebut', TimeType::class, array(
                'input' => 'datetime',
                'widget' => 'choice',
                'constraints' => array(
                    new IsLessThan(),

                ),
                //new IsLessThan(),
            ))
            ->add('heureFin', TimeType::class, array(
                'input' => 'datetime',
                'widget' => 'choice',
                //new IsLessThan(),
            ))
            ->add('jour')
            ->add('enseigner', EntityType::class, array(
                'class' => 'AppBundle:Enseigner',
                'choice_label' => 'sousClasse.libelleSousClasse',
                'choice_value' => 'sousClasse.id',
                'empty_value' => 'choisissez la classe',
                'choices_as_values' => true,
                'choice_attr' => function ($val, $key, $index) {
                    $disabled = false;
                    if ($val == 'empty_value') {
                        $disabled = true;
                    }
                    return $disabled ? ['disabled' => $disabled] : [];
                    // set disabled to true based on the value, key or index of the choice...
                },
            ))
            ->add('salle', EntityType::class, array(
                'class' => 'AppBundle:Salle',
                'choice_label' => 'codeSalle',
                'empty_value' => 'choisissez la salle',
                //'choice_label' => 'libelleFiliere',
                'choices_as_values' => true,
                'choice_attr' => function ($val, $key, $index) {
                    $disabled = false;
                    if ($val == 'empty_value') {
                        $disabled = true;
                    }
                    return $disabled ? ['disabled' => $disabled] : [];
                    // set disabled to true based on the value, key or index of the choice...
                },
            ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ProgrammeCours'
        ));
    }
}
