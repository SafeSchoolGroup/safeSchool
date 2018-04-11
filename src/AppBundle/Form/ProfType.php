<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProfType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('sexe',ChoiceType::class, array(
                'choices' => array(
                  'Masculin' => 'M',
                  'Féminin' => 'F'),
                  'choices_as_values' => true))
            ->add('adresseRue')
            ->add('adresseVille')
            ->add('email')
            ->add('telephone')
            ->add('dateNaissance', 'date')
            ->add('lieuNaissance')
            ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Prof'
        ));
    }
}
