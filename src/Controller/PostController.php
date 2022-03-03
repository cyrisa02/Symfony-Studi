<?php

// src/Controller/PostController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PostController extends AbstractController
{
    public function list()
    {
        $posts = [
            ['title' => 'Fonctionnement des applications Symfony'],
            ['title' => 'Le système de routing'],
            ['title' => 'Les contrôleurs'],
            ['title' => 'Les templates'],
        ];

        $content = '<p> fonctionnement avec un fichier PostController.php sans méthode render ce qui n\'est pas top</p>'.'<ul>';

        foreach ($posts as $post) {
            $content .= '<li>'.$post['title'].'</li>';
        }

        $content .= '</ul>';

        return new Response($content);
    }

    public function item2(): Response
    {
        return $this->render('post/item2.html.twig', [
            'title' => 'Fonctionnement des applications Symfony',
            'author' => 'Pierre Dupont',
        ]);
    }
}
