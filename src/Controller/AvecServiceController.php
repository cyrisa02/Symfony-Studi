<?php

namespace App\Controller;

use App\Service\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvecServiceController extends AbstractController
{
    /**
     * @Route("/deactivate/{id}")
     */
    public function deactivateUser(UserManager $userManager, int $id): Response
    {
        $userManager->deactivate($id);

        return new Response('<html><body><p>Utilisateur n°'.$id.' désactivé</p>
        
        <p>il faut soulager les controllers donc on crée les services qui sont des classes avec les méthodes métier</p>

        <p>on peut voir le fichier services.yaml</p>

        <p>pour info, il y a aussi le fichier .env, changer APP_ENV=dev en APP_ENV=prod et on se retrouve en version finale</p>
        
        </body></html>');
    }
}
