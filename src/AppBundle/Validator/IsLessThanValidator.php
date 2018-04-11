<?php
namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;


/**
 *
 */
class IsLessThanValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if ($value >= $this->context->getRoot()->get('heureFin')->getData()) {

               $this->context->addViolation($constraint->message);
           }
    }

}
