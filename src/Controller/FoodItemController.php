<?php

namespace App\Controller;

use App\Entity\Food;
use App\Entity\Seller;
use App\Form\FoodType;
use App\Repository\FoodRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/food/item')]
class FoodItemController extends AbstractController
{
    #[Route('/', name: 'app_food_item_index', methods: ['GET'])]
    public function index(FoodRepository $foodRepository): Response
    {
        return $this->render('food_item/index.html.twig', [
            'food' => $foodRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_food_item_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $food = new Food();
        $form = $this->createForm(FoodType::class, $food);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($food);
            $entityManager->flush();

            return $this->redirectToRoute('app_food_item_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('food_item/new.html.twig', [
            'food' => $food,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_food_item_show', methods: ['GET'])]
    public function show(Food $food): Response
    {
        return $this->render('food_item/show.html.twig', [
            'food' => $food,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_food_item_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Food $food, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FoodType::class, $food);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_food_item_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('food_item/edit.html.twig', [
            'food' => $food,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_food_item_delete', methods: ['POST'])]
    public function delete(Request $request, Food $food, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$food->getId(), $request->request->get('_token'))) {
            $entityManager->remove($food);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_food_item_index', [], Response::HTTP_SEE_OTHER);
    }
}
