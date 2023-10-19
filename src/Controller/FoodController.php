<?php

namespace App\Controller;

use App\Entity\Food;
use App\Entity\Seller;
use App\Repository\FoodCategoryRepository;
use App\Repository\FoodRepository;
use App\Repository\VinylMixRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class FoodController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/food/new', name: 'app_food')]
    public function new(EntityManagerInterface $entityManager): Response
    {
        $food = new Food();
        $food->setName('Cheeseburger');
        $food->setDescription('A delicious cheeseburger with all the fixins!');
        //img path = public/images/cheeseburger.jpg
        $food->setImagePath('images/cheeseburger.jpg');

        //get foods
        $foodRepository = $entityManager->getRepository(Food::class);
        $food = $foodRepository->findAll();
        $foodCategoryRepository = $entityManager->getRepository(FoodCategory::class);
        //render sending food variable
        return $this->render('food/index.html.twig', [
            'food' => $food,
        ]);
    }

    //homepage
    #[Route('/', name: 'app_homepage')]
    public function homePage(): Response
    {
        $sellerRepository = $this->entityManager->getRepository(Seller::class);
        $seller = $sellerRepository->findBy(['id' => 1]);

        $foods = $seller[0]->getFoods();
//        foreach ($foods as $food) {
//            dump($food);
//        }

        return $this->render('food/index.html.twig', [
            'title' => 'PB & Jams',
            'foods' => $foods,
        ]);
    }

    #[Route('/browse/{slug}', name: 'app_browse')]
    public function browse(string $slug = null): Response
    {
        $foodRepository = $this->entityManager->getRepository(Food::class);
        $foods = $foodRepository->findAllFoods();
//        dd($foods[0]->getSeller()->getName());

        return $this->render('food/browse.html.twig', [
            'foods' => $foods,
        ]);
    }
}
