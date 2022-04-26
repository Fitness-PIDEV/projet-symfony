<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        $produit=$this->getDoctrine()->getRepository(Produit::class)->findBy(["etat"=>1],["nbrvue"=>"DESC"],3);
        return $this->render('home/index.html.twig', ["tabproduit"=>$produit]);
    }


}
