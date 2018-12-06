<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VypisProduktuController extends AbstractController
{
    /**
     * @Route("/vypis_produktu", name="vypis_produktu")
     */
    public function index()
    {
        return $this->render('vypis_produktu/index.html.twig', [
            'controller_name' => 'VypisProduktuController',
        ]);
    }
}
