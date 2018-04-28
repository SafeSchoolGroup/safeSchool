<?php
namespace API\InfoBundle\Listener;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;

use AppBundle\Entity\Information;
use API\InfoBundle\Event\OnPublieEvent;

/**
 *
 */
class DatePublication
{
    private $event;
    public function publieATrue(Response $resp)
  {
      $resp->modifierPublie(true);
  }

  public function onPublieATrue(OnPublieEvent $even)
  {
    $this->event = $even;

    $datePublication = $this->event->obtenirDatePublication();
    $dateActuelle = new \DateTime('now');

        // On teste si la requête est bien la requête principale
        if (HttpKernelInterface::MASTER_REQUEST !== $this->event->getRequestType()) {
                   return;
            }

        // On récupère la réponse depuis l'évènement
      $response = $this->event->getResponse();

      if ($dateActuelle >= $datePublication)
      {
      $response->$this->publieATrue($event->getResponse());

      }
      $event->setResponse($response);
  }
}
