<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // A rajouter

//Ce morceau de code permet d'avoir toujours le chemin /blog/fr/notrechemin ou /blog/en/notrechemin

/**
 * @Route("/blog", requirements={"_locale" : "fr|en"})
 */
class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_index")
     */
    public function blog()
    {
        return new Response(
            '<html><body>Accueil</body></html>'
        );
    }

    /**
     * @Route("/posts", name="blog_post")
     */
    public function posts()
    {
        return new Response(
            '<html><body>Liste des articles</body></html>'
        );
    }

    /**
     * @Route("/posts/{id}")
     */
    public function post(int $id)
    {
        return new Response(
        '<html><body>Article '.$id.'</body></html>'
        // Grâce au paramètre $id, on récupère le post afin de l'afficher
    );
    }

    /**
     * @Route("/bonjour/{name}",name="hello")
     */
    public function hello(string $name)
    {
        return new Response(
        '<html><body>Article '.$name.'</body></html>'
        // Grâce au paramètre $name, on arrive à afficher le slug de l'URL que j'ai saisi dans l'URL /bonjour/cyril /bonjour/nicolas etc...
    );
    }

    /**
     * @Route("/posts/{user}/{year}")
     */
    public function postsFromUserAndYear(string $user, int $year)
    {
        return new Response(
        '<html><body>
        
        <h1>Question</h1>
        <p>Sur notre blog, nous souhaiterions également afficher les articles qu\'un utilisateur particulier a écrit une certaine année.

        Par exemple, la page https://www.monsuperbloggenial.com/posts/john/2015 devra afficher tous les articles que John a écrit en 2015, alors que la page https://www.monsuperbloggenial.com/posts/emilie/2012 affichera tous les articles d\'Émilie datant de 2012.
        
        Complétez le BlogController avec cette nouvelle route et créez l\'action postsFromUserAndYear associée. La méthode pourra simplement afficher le nom et la date rentrée.</p>


        <h1>Réponse</h1>

        '.$user.' '.$year.'
        
        
        
        </body></html>'
        // Grâce au paramètre $name, on arrive à afficher le slug de l'URL que j'ai saisi dans l'URL /bonjour/cyril /bonjour/nicolas etc...
    );
    }

    /**
     * @Route(
     *    "/posts/{id}",
     *    methods={"POST", "PATCH"},
     *    requirements={"id"="\d+"}
     * )
     */
    public function savePost(int $id = 1)
    {
        //méthods post ou patch avec un id int <=> \d+
    }

    /**
     * @Route(
     * "{_locale}/posts/{id<\d+>?1}.{_format}",
     * methods={"GET"}),
     * requirements={"_format"="json|html"}
     * )
     */
    public function post1(Post $post)
    {
        // On peut rajouter les requirements pour le paramètre _locale (la langue fr ou en)dans la configuration de la route, ou alors pour toutes les actions du contrôleur comme c'est le cas ici _format json ou html
    }

    /**
     * @Route(
     *    "/posts2/{user}/{year}",
     *    methods={"GET"},
     *    requirements={"year"="^\d{4}$"}
     * )
     */
    public function postsFromUserAndYear1(string $user, int $year = 2020)
    {
        return new Response(
            '<html><body>
            <h1>Attention, j\'ai mis blog/fr/posts2/cyril</h1>

            <p>Dans l\'exercice précédent, nous avions créé la route /posts/{user}/{year}. Dans cet exercice, modifiez cette route pour vous assurer que l\'année est bien un entier sur 4 chiffres, qui est par défaut à 2020. Spécifiez également que toutes vos routes sont en GET.</p>
            
            '.$user.' '.$year.'</body></html>'
        );
    }
}
