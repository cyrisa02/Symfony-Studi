<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index()
    {
        return new Response('Hello world!, je mappelle Cyril');
    }

    public function contact(): Response
    {
        return $this->render('default/contact.html.twig', ['name' => 'Cyril']);
    }

    public function item(): Response
    {
        return $this->render('default/item.html.twig', [
            'title' => 'Fonctionnement des applications Symfony',
             'author' => 'Pierre Dupont', ]);
    }
}

// Une route est définie par au moins trois paramètres : son nom, son path, et son action de contrôleur.

//Les routes sont déclarées dans le fichier config/routes.yaml.

// Définissez une route post_list: affichant l'ensemble des articles d'un blog. La méthode affichant les articles se nomme list et se trouve dans le contrôleur PostController placé dans le dossier src/Controller. L'URL de la route doit être https://www.example.com/liste-des-articles.

//On mappe la méthode contact qui renvoie une Response Symfony: on met à jour le fichier routes.yaml

// Pour installer le bundle (bibliothèque de template) twig, dans le terminal écrire composer req twig

//Composer crée de nouveau dossier templates
