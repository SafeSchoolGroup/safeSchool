<?php
namespace AppBundle\Validator;
use Symfony\Component\Validator\Constraint;
/**
*
*/

class IsLetterInfo extends Constraint
{

    public $message = 'Ce champ ne doit contenir que des lettres';
    public $notBlankMessage = 'Ce champ ne doit pas etre vide';
    public $message1 = 'Ce champ est trop court';

}
