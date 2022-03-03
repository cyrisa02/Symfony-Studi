<?php

namespace App\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; supprimer grâce annotations
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // A rajouter

class NoRoutyamlController
{
    /**
     * @Route("/annotation", name="annotation")
     */
    public function annotation()
    {
        return new Response('<body>Premier exemple de routing avec annotations, pas besoin de gérer routes.yaml<br>
        <h2>installer annotation</h2></body>');
    }
}
