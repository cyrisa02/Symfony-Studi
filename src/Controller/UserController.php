<?php

// src/Controller/UserController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class UserController extends AbstractController
{
    private const USERS = [
        ['name' => 'Nicolas'],
        ['name' => 'Alice'],
        ['name' => 'Grégory'],
    ];

    public function list(): Response
    {
        return $this->render('user/list.html.twig', [
            'users' => self::USERS,
        ]);
    }

    public function item(int $id): Response
    {
        return $this->render('user/item.html.twig', [
            'user' => self::USERS[$id],
        ]);
    }
}
