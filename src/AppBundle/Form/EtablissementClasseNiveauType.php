<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use AppBundle\Form\SousClasseType;



class EtablissementClasseNiveauType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('created_at', 'datetime')
            //->add('updated_at', 'datetime')
            /*->add('etablissementClasse',EntityType::class,array(
                'class' => 'AppBundle:EtablissementClasse',
                'label' =>'Classe',
                'query_builder' => function (EntityRepository $er){
                     return $er->createQueryBuilder('c')
                     ->orderBy('c.classe', 'DESC');
                     },

                'choice_label' => 'classe.libelleClasse',
                'choice_value' => 'classe.id'
            ))*/
            ->add('etablissementClasse',new EtablissementClasseType())
            /*->add('niveauEtude',EntityType::class,array(
                'class' => 'AppBundle:NiveauEtude',
                'label' =>'NiveauEtude',
                'query_builder' => function (EntityRepository $er){
                     return $er->createQueryBuilder('n')
                     ->orderBy('n.codeNiveauEtude', 'DESC');
                     },
                'choice_label' => 'codeNiveauEtude',
                'choice_value' => 'id',
                'multiple' => true,
                'expanded' => true,
            ))*/
            ->add('sousClasses','collection', array(
                                            'type' => new SousClasseType(),
                                            'allow_add' => true,
                                            'allow_delete' =>true


))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\EtablissementClasseNiveau'
        ));
    }
}
