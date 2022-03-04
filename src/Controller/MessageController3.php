<?php

// src/Controller/MessageController.php

//Reprenons notre exemple précédent, c'est maintenant à vous d'ajouter quelques headers à la réponse du contrôleur MessageController::item() :

//un header Cache-Control avec une durée d'une heure

//un header ETag contenant le hash md5 du contenu de notre réponse

//Vous pouvez récupérer le contenu de la réponse avec la méthode getContent() pour la hasher.

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    public const MESSAGES = ['Bonjour', 'Bonsoir', 'Au revoir', 'Salut', 'Coucou', 'Ciao', 'Adieu', 'Bienvenue', 'Bonne nuit', 'Bye'];

    /**
     * @Route("/messages/{id}", name="message_item")
     */
    public function item(int $id): Response
    {
        if (!isset(self::MESSAGES[$id])) {
            throw $this->createNotFoundException('Le message n\'existe pas');
        }

        return $this->json(self::MESSAGES[$id]);
        $response->setSharedMaxAge(3600);
        $response->setEtag(md5($response->getContent()));

        return $response;
    }
}
