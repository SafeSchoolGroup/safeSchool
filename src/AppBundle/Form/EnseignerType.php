<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnseignerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('dateEnseigner', 'date')
            //->add('etablissementProf')
            //->add('matiere')
            ->add('dateEnseigner', 'date')
            ->add('sousClasse', EntityType::class, array(
                'class' => 'AppBundle:SousClasse',
                'choice_label' => 'libelleSousClasse',
            ))/*->add('etablissementProf',EntityType::class,array(
                'class' => 'AppBundle:EtablissementProf',
                'label' =>'Prof',

                'query_builder' => function (EntityRepository $er){
                     return $er->createQueryBuilder('e')
                     ->orderBy('e.prof', 'DESC');
                     },

                'choice_label' => 'prof.nom',
                'choice_value' => 'prof.id'
            ))*/
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Enseigner'
        ));
    }
}
