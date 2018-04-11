<?php

namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 *
 */
class IsTelephoneValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        $regex = preg_match('/^[0-9]/',$value);

            if(!$regex && strlen($value) != 0)
            {
                $this->context->addViolation($constraint->message);
            }
            elseif(!$regex && strlen($value) == 0)
            {
                $this->context->addViolation($constraint->notBlankMessage);
            }
            elseif(strlen($value) != 0 &&  strlen($value) < 7)
            {
                $this->context->addViolation($constraint->message2);
            }







    }

}
