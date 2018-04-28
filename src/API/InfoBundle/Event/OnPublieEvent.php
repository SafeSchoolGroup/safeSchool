<?php
namespace API\InfoBundle\Event;

use AppBundle\Entity\Information;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Security\Core\User\UserInterface;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;


class OnPublieEvent extends FilterResponseEvent
{

  private $info;


  public function __construct(Information $information){
      $this->info = $information;
  }

  public function getInfo()
  {
    return $this->info;
  }

  public function modifierPublie($publie)
  {
    $this->info->setPublie($publie);
  }

  public function obtenirDatePublication()
  {
    return $this->info->getDatePublication();
  }

  public function obtenirPublie()
  {
    return $this->info->getPublie();
  }
}
