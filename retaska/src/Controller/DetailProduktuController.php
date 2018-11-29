<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetailProduktuController extends AbstractController
{
    /**
     * @Route("/detail/produktu", name="detail_produktu")
     */
    public function index()
    {
        return $this->render('detail_produktu/index.html.twig', [
            'controller_name' => 'DetailProduktuController',
        ]);
    }
}
