<?php
namespace AppBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;


/**
 *
 */
class IsLetterInfoValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {

            $regex = preg_match("#[a-zA-Zéèçàê\']#",$value);

            if(!$regex && strlen($value) != 0)
            {
                $this->context->addViolation($constraint->message);
            }

            elseif(strlen($value) == 0)
            {
            $this->context->addViolation($constraint->notBlankMessage);
            }

            elseif(strlen($value) != 0 &&  strlen($value) < 2)
            {
                $this->context->addViolation($constraint->message1);
            }
    }

}
