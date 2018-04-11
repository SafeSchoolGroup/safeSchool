<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use AppBundle\Form\Type\TelType;
use AppBundle\Validator\IsTelephone;
use AppBundle\Validator\IsLetter;
use AppBundle\Validator\IsLetterInfo;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\Validator\Constraints\Regex;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Form\FichierType;

class ApprenantType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('code')
            //->add('user')
            ->add('tuteur', new TuteurType())
            ->add('nom',TextType::class,array(
                'constraints' => array(
                //new Isletter(),
                new IsLetterInfo(),
            ))
            )
            ->add('prenom',TextType::class,array(
                'constraints' => array(
                    new IsLetterInfo(),
            )

            ))
            ->add('dateNaissance',DateType::class,array(
                'widget' => 'single_text',
                'input' => 'array',
                'format' => 'yyyy-MM-dd',
                'attr' => ['class' => 'js-datepicker'],

                'constraints' => array(

                    new NotBlank(array(
                        "message" => "ce champ ne doit pas etre vide"
                    )),

            ),
                ))
            ->add('nationalite',TextType::class,array(
                'constraints' => array(
                    new IsLetterInfo(),

            ),

            ))
            ->add('telephone',TelType::class,array(
                'constraints' => array(
                    new IsTelephone()
                ))
            )

            ->add('email',EmailType::class,array(
                'constraints' => array(
                new NotBlank(array(
                    "message" => "ce champ ne doit pas etre vide"
                )),
                new Email(array(
                    'message' => 'Cet e-mail n\'est pas valide'
                )),
            ),

            ))
            /*->add('fichiers', FileType::class, array(
                'multiple' => true
            ))*/
            /*->add('fichiers','collection', array(
                                            'type' => new FichierType(),
                                            'allow_add' => true,
                                            'allow_delete' =>true


))

            ->add('fichiers',FileType::class,array(

                'constraints' => array(
                    new NotBlank(array(
                        "message" => "ce champ ne doit pas etre vide"
                    )),
                ),

            'multiple' => true,
            'required' => false
            ))

            ->add('filiereserie',EntityType::class, array(

                'class' => 'AppBundle:Filiere',


                 'query_builder' => function (EntityRepository $er){
                     return $er->createQueryBuilder('l')
                     ->orderBy('l.libelleFiliere', 'ASC');
                     },
                     'empty_value'   => 'choisissez votre Filière',
                     'choice_label' => 'libelleFiliere',
                     'choices_as_values' => true,
                     'choice_attr' => function($val, $key, $index) {
                             $disabled = false;
                             if ($val == 'empty_value') {
                                 $disabled = true;
                             }
                             return $disabled ? ['disabled' => $disabled] : [];
                             // set disabled to true based on the value, key or index of the choice...
                     },

                'constraints' => array(
                    new NotBlank(array(
                        "message" => "ce champ ne doit pas etre vide"
                    )),


            ),


            ))*/
            /*->add('statusapprenant',ChoiceType::class, array(
                'choices' => array(
                    'choisissez votre status' => null,
                    'Inscrit' => 'inscriptible',
                    'Preinscrit' => 'preinscriptible',
                    'Abandon' =>'abandonne',
            ),

            'choices_as_values' => true,
            'choice_attr' => function($val, $key, $index) {
                    $disabled = false;
                    if ($val == null) {
                        $disabled = true;
                    }
                    return $disabled ? ['disabled' => $disabled] : [];
                    // set disabled to true based on the value, key or index of the choice...
            },

            'constraints' => array(
                new NotBlank(array(
                    "message" => "ce champ ne doit pas etre vide"
                )),

        ),

        ))*/

            ->add('lieuNaissance',TextType::class,array(
                'constraints' => array(


                    new IsLetterInfo(),
            ),
            ))
            /*->add('annee',TextType::class,array(
                'disabled' => true
            ))*/
            ->add('sexe',ChoiceType::class,array(
                'choices' => array(
                'Choisissez votre sexe' => 'nul',
                'Masculin' => 'M',
                'Féminin' => 'F'
            ),

            'choices_as_values' => true,
            'choice_attr' => function($val, $key, $index) {
                    $disabled = false;
                    if ($val == null) {
                        $disabled = true;
                    }
                    return $disabled ? ['disabled' => $disabled] : [];
                    // set disabled to true based on the value, key or index of the choice...
            },

            'constraints' => array(
                new NotBlank(array(
                    "message" => "ce champ ne doit pas etre vide"
                )),
        )
            ))

            ->add('adresseVille',TextType::class,array(
                'constraints' => array(
                    new NotBlank(array(
                        "message" => "ce champ ne doit pas etre vide"
                    )),
            )
            ))

            ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Apprenant'
        ));
    }
}
