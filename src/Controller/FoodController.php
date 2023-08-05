<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FoodController extends AbstractController
{
    #[Route('/foods/{id}', name: 'app_food')]
    public function index($id): Response
    {
        return $this->render('food/index.html.twig', [
            'controller_name' => 'FoodController',
            'id' => $id,
        ]);
    }
}
