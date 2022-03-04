<?php

// src/Helper/MessageHelper.php

namespace App\Helper;

use Symfony\Component\Routing\RouterInterface;

class MessageHelper
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function addUrlsToMessages(array $messages): array
    {
        $messagesWithURLs = [];

        foreach (self::MESSAGES as $index => $message) {
            $messagesWithURLs[] = [
                'text' => $message,
                'url' => $this->generateUrl('message_item', ['id' => $index]),
            ];
            // On peut se servir de la méthode generate() du routeur de Symfony. C'est ce que fait en interne la méthode generateUrl() de l'AbstractContoller.

            //On récupérait tout le code foreach de MessageController pour le soulager
            $url = $this->router->generate('message_item', ['id' => $index]);
        }

        return $messagesWithURLs;
    }
}
