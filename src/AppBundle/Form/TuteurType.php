<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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


class TuteurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,array(
                'constraints' => array(

                    new Isletter(),
            )
            ))
            ->add('prenom',TextType::class,array(
                'constraints' => array(

                    new IsLetterInfo(),
            )
            ))
            ->add('email',EmailType::class,array(
                'constraints' => array(
                    new NotBlank(array(
                        "message" => "ce champ ne doit pas etre vide"
                    )),
                    new Email(array(
                        'message' => 'Cet e-mail n\'est pas valide'
                    )),
            )
            ))
            ->add('telephone',TextType::class,array(
                'constraints' => array(

                    new IsTelephone(),

            )
            ))
            ->add('profession',TextType::class,array(
                'constraints' => array(

                    new IsLetterInfo(),
            )
            ))
            ->add('lienParente',ChoiceType::class, array(
                'choices' => array(
                    'choisissez le lien de parenté' => null,
                    'Père' => 'Parent-proche',
                    'Mère' => 'Parent-proche',
                    'Tuteur' =>'Parent-éloigné'
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
        ))
        ;


        /*->add('nomparent',TextType::class,array(
            'constraints' => array(

                new Isletter(),
        )
        ))
        ->add('prenomparent',TextType::class,array(
            'constraints' => array(

                new IsLetterInfo(),
        )
        ))
        ->add('telephoneparent',TextType::class,array(
            'constraints' => array(

                new IsTelephone(),

        )
        ))
        ->add('lienParente',ChoiceType::class, array(
            'choices' => array(
                'choisissez le lien de parenté' => null,
                'Père' => 'Parent-proche',
                'Mère' => 'Parent-proche',
                'Tuteur' =>'Parent-éloigné'
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
    ))
        ->add('optionpaiement',ChoiceType::class, array(
            'choices' => array(
            'Mobile Money' => 'Mobile Money',
            'Flooz' => 'Flooz',
            'UBA' => 'Carte Visa UBA'

        ),
        'choices_as_values' => true,

        'constraints' => array(
            new NotBlank(array(
                "message" => "ce champ ne doit pas etre vide"
            )),
    ),
            'choices_as_values' => true,

        ))
        ->add('emailparent',EmailType::class,array(
            'constraints' => array(
                new NotBlank(array(
                    "message" => "ce champ ne doit pas etre vide"
                )),
                new Email(array(
                    'message' => 'Cet e-mail n\'est pas valide'
                )),
        )
        ))

        ->add('niveauEtude',EntityType::class, array(
            'class' => 'AppBundle:NiveauEtude',

            'query_builder' => function (EntityRepository $er){
                 return $er->createQueryBuilder('n')
                 ->orderBy('n.libelleNiveauEtude', 'DESC');
                 },
            'empty_value'   => 'Choisissez le Niveau d\'étude à commencer',
            'choice_label' => 'libelleNiveauEtude',
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


        )
    ))
*/


    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Tuteur'
        ));
    }
}
