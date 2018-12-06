<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }

    /**
     * @Route("/dekovna", name="dekovna")
     */
    public function dekovna()
    {
        return $this->render('homepage/dekovna.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
}

