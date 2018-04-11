<?php

namespace SafeSchool\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SafeSchoolUserBundle extends Bundle
{
  public function getParent()
  {
      return 'FOSUserBundle';
      
  }
}
