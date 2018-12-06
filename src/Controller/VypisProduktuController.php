<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use App\Repository\KategorieRepository;

class VypisProduktuController extends AbstractController
{
    /**
     * @Route("/vypis_produktu", name="vypis_produktu")
     */
 public function index(ProductRepository $productRepository, KategorieRepository $kategorieRepository)
 {
        return $this->render('vypis_produktu/index.html.twig', ['products' => $productRepository->findAll(), 'Kategories' => $kategorieRepository->findAll() ]);
}
}
