<?php
namespace AppBundle\Validator;
use Symfony\Component\Validator\Constraint;

/**
* @Annotation
*/

class IsLessThan extends Constraint
{

    public $message = 'Heure du debut ne doit être superieure ou egale à celle de Fin';
    //public $notBlankMessage = 'Ce champ ne doit pas etre vide';
    //public $message1 = 'Ce champ est trop court';
    /*public function validatedBy()
   {
           return 'IsLessThanValidator';
   }*/

   public function getTargets()
   {
           return self::CLASS_CONSTRAINT;
   }

}
