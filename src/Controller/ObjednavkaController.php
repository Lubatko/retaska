<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Objednavka;
use App\Form\ObjednavkaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ObjednavkaController extends AbstractController
{
    /**
     * @Route("/objednavka", name="objednavka", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $objednavka = new Objednavka();
        $form = $this->createForm(ObjednavkaType::class, $objednavka);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($objednavka);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('objednavka/index.html.twig', [
            'objednavka' => $objednavka,
            'form' => $form->createView(),
        ]);
    }

}
