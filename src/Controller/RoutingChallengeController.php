<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/challenge")
 */
class RoutingChallengeController extends AbstractController
{
    /**
     *@Route("/send-result/{id<\d+>}", methods={"POST"})
     */
    public function sendResult()
    {
        $url = $this->generateUrl('app_routingchallenge_getuseranswers', ['username' => 'John']);
        //Complétez le code de l'action sendResult() afin de rediriger l'utilisateur vers la route correspondante à l'action getUserAnswers() de l'utilisateur "John". Par défaut, le nom d'une route pour Symfony est app_nomcontroller_nomdelamethode. Par exemple, ici, le nom de la route send-result est app_routingchallenge_sendresult.
        return new RedirectResponse($url);
    }

    /**
     * @Route("/user-answers/{username}/{_format}", methods={"GET"}, requirements={"_format": "html|json"})
     */
    public function getUserAnswers(string $username)
    {
    }

    /**
     * @Route("/user-answers/{username}/{id}")
     */
    public function getUserAnswer(string $username, int $id = 1)
    {
    }
}

//Les consignes sont les suivantes :

    //Toutes les routes de ce contrôleur doivent commencer par /challenge.

    //Vous devez vous assurer que le slug {id} de la route de l'action sendResult() est un entier positif.

    //L'action sendResult() ne doit être accessible qu'en POST.

    //Complétez le code de l'action sendResult() afin de rediriger l'utilisateur vers la route correspondante à l'action getUserAnswers() de l'utilisateur "John".

    //L'action getUserAnswers() ne doit être accessible qu'en GET.

    //Vous devez vous assurer que le slug {_format} ne peut avoir comme valeur que "html" ou "json".

    //L'action getUserAnswer(), quant à elle, permet de n'avoir qu'une seule des réponses de l'utilisateur, en la choisissant par son ID. Rendez le slug {id} facultatif.
