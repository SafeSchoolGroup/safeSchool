<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class IsIntegerValidator extends Constraint
{
    const REGEX_FAILED_ERROR = 'de1e3db3-5ed4-4941-aae4-59f3667cc3a3';

    protected static $errorNames = array(
        self::REGEX_FAILED_ERROR => 'REGEX_FAILED_ERROR',
    );

    public $message = 'This value is not valid.';
    public $pattern;
    public $htmlPattern;
    public $match = true;


}
