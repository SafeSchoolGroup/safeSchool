<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class MatiereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeMatiere')
            ->add('libelleMatiere')
            ->add('credit')
            ->add('masseHoraire')
            ->add('etablissementClasseNiveau',EntityType::class, array(
                  'class' => 'AppBundle:EtablissementClasseNiveau',
                  'choice_label' => 'libelle',
                  'label' => 'Niveau',
      // pour enregistrere une matiere, on choisira en aval l'etablissememntClasseniveau,
      // c'est cela qui sera simplement donnee a l'attribut etatblissememntClasseNineau pour
      // etre enregistrer
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Matiere'
        ));
    }
}
