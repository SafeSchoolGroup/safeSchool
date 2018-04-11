<?php
namespace AppBundle\Validator;
use Symfony\Component\Validator\Constraint;

 /**
 *
 */
class IsTelephone extends Constraint
{

    public $message = 'Ce numero de télephone n\'est pas valide';
    public $notBlankMessage = 'Ce champ ne doit pas etre vide';
    public $message2 = 'Le numero de télephone est trop court';
    public $message3 = 'Le numero de télephone est trop long';



}
