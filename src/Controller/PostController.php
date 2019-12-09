<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/lucky.html.twig', [
            'number' => $number,
        ]);
    }

    public function index()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/lucky.html.twig', [
            'number' => $number,
        ]);
    }
}