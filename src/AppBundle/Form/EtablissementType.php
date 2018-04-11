<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;


class EtablissementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            //->add('nomFondateur')
            //->add('prenomFondateur')
            //->add('nomDirecteur')
            //->add('prenomDirecteur')
            ->add('adresseRue')
            ->add('adresseVille')
            ->add('adressePostale')
            ->add('telephone1')
            ->add('telephone2')
            ->add('email')
            //->add('urlSite')
            ->add('anneeCreation')
            //->add('historique')
            ->add('niveauEtablissement', ChoiceType::class, array(
                                        'choices' => array(
                                        'Choisissez un niveau' => null,
                                        'Lycée' => 'Lycée',
                                        'Secondaire' => 'Secondaire',
                                        'Université' => 'Université',
                                        ),

                                        'choices_as_values' => true,
                                        ))
            ->add('statutEtablissement', ChoiceType::class, array(
                                        'choices' => array(
                                        'Choisissez un statut' => null,
                                        'Agricole' => 'agricole',
                                        'Technique' => 'technique',
                                        'Privé' => 'prive',
                                        'Public' => 'public',
                                        'Ecole' => 'ecole',
                                        'Faculté' => 'faculte',
                                        'Institut' => 'institut',

                                        ),

                                        'choices_as_values' => true,))


            ->add('categorieEtablissement', ChoiceType::class, array(
                                        'choices' => array(
                                        'Choisissez categ' => null,
                                        'Catholique' => 'Catholique',
                                        'Coranique' => 'Coranique',
                                        'Laïc' => 'Laïc',
                                        'Protestant' => 'Protestant',
                                        'Social' => 'Social'
                                        ),

                                        'choices_as_values' => true,))
            //->add('pourcentageDevoir')
            //->add('pourcentagePartiel')
            //->add('pourcentageTP')
            //->add('longitude')
            //->add('latitude')
            /*->add('logoEtablissement', FileType::class,array(
                'required' => false,
                'constraints' =>array(
                    new NotBlank(array(
                        'message' => 'Veuillez choisir votre logo !'
                    )),

                    new File(array(
                        'mimeTypes' => array(
                            'image/png',
                            'image/jpeg'
                        )
                    ))
                )))*/
            /*->add('photoCouvertureEtablissement', FileType::class,array(
                'required' => false,
                'constraints' =>array(
                    new NotBlank(array(
                        'message' => 'Veuillez choisir votre image de couverture !'
                    )),

                    new File(array(
                        'mimeTypes' => array(
                            'image/png',
                            'image/jpeg'

                        )
                    ))
                )))*/
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Etablissement'
        ));
    }
}
