<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreeAvecMakeController extends AbstractController
{
    /**
     * @Route("/exemple", name="app_basic_home")
     */
    public function index(): Response
    {
        $html = '<html><body><h1>Bienvenue !</h1></body></body></html>';

        return new Response($html);
    }

    /**
     * @Route("/another-page")
     */
    public function anotherPage(): RedirectResponse
    {
        //POUR REDIRIGER attention BIEN METTRE le name ici app_basic_home!!!!
        // On génère l'URL vers notre première méthode
        //$url = $this->generateUrl('app_basic_home');

        // Un nouveau type de Reponse nous permettant de rediriger vers l'URL fournie !
        //return new RedirectResponse($url);

        return $this->redirectToRoute('app_basic_home'); //Le même traitement peut être réalisé plus succinctement grâce à une autre méthode, redirectToRoute(), qui prend le nom de la route en paramètre.
    }

    /**
     * @Route("/message/{id}")
     */
    public function message(int $id): Response
    {
        $messages = ['Bonjour', 'Bonsoir', 'Au revoir'];

        // Si l'id n'appartient pas au tableau messages, une HttpException est levée
        if (!isset($messages[$id])) {
            throw $this->createNotFoundException(sprintf('Le message d\'id %s n\'existe pas', $id));
        }

        return new Response($messages[$id]);

        //PAGE 404: Il est important de gérer toutes les situations possibles dans notre code afin de fournir une utilisation agréable à nos utilisateurs. Imaginons que notre site dispose d'une route "/message/{id}" qui affiche un message spécifique selon un id donné. Rien n'empêcherait l'utilisateur d'entrer lui-même une valeur pour {id} et demander un message qui n'existe pas !
    }

    /**
     * @Route("/json")
     */
    public function jsonexemple(): Response
    {
        return $this->json(['username' => 'Nicolas']);
    }

    // récupère du json
}
