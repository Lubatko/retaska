<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class DetailProduktuController extends AbstractController
{
    /**
     * @Route("/detail_produktu/{id}", name="product_detail", methods="GET")
     */
    public function show(Product $product): Response
    {
        return $this->render('detail_produktu/index.html.twig', ['product' => $product]);
    }

}
