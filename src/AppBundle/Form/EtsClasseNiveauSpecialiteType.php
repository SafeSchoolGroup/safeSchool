<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtsClasseNiveauSpecialiteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('etablissementClasseNiveau', EntityType::class, array(
                'class' => 'AppBundle:EtablissementClasseNiveau',
                'choice_label' => 'niveauEtude.libelleNiveauEtude',
            ))//->add('specialite')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\EtsClasseNiveauSpecialite'
        ));
    }
}
