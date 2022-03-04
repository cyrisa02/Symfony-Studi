<?php

// src/Controller/MessageController.php
// voir fichier src/Helper/MessageHelper.php

// Enoncé créez un service qui permettra d'externaliser le contenu de la méthode MessageController::list():

namespace App\Controller;

use App\Helper\MessageHelper;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir'];

    /**
     * @Route("/messages", name="message_list")
     */
    public function list(MessageHelper $messageHelper): Response
    {
        return $this->json($messageHelper->addUrlsToMessages(self::MESSAGES));
    }

    /**
     * @Route("/messages/{id}", name="message_item")
     */
    public function item(int $id): Response
    {
        if (!isset(self::MESSAGES[$id])) {
            throw $this->createNotFoundException('Le message n\'existe pas');
        }

        return $this->json(self::MESSAGES[$id]);
    }
}

//Ancien code

//<?php

// src/Controller/MessageController.php
//namespace App\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;

//class MessageController extends AbstractController
//{
 //   public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir'];

 //   /**
  //   * @Route("/messages", name="message_list")
  //   */
  //  public function list(): Response
  //  {
   //     $messagesWithURLs = [];

  //      foreach (self::MESSAGES as $index => $message) {
   //         $messagesWithURLs[] = [
  //              'text' => $message,
  //              'url' => $this->generateUrl('message_item', ['id' => $index]),
  //          ];
  //      }
//
 //       return $this->json($messagesWithURLs);
 //   }
//}
