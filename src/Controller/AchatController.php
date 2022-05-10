<?php

namespace App\Controller;

use App\Entity\Achat;
use App\Entity\Produit;
use App\Repository\LivraisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\AchatType;
use Symfony\Component\HttpFoundation\Request;

class AchatController extends AbstractController
{
    /**
     * @Route("/achat", name="app_achat")
     */
    public function index(): Response
    {
        return $this->render('achat/index.html.twig', [
            'controller_name' => 'AchatController',
        ]);
    }

    /**
     * @Route("/{id}/ajouterAchat", name="addachat")
     */
    public function ajouterachat (Request $request,Produit $produit,$id): Response
    {
        $achat = new achat();



        $em=$this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->findOneBy(["id"=>$id]);


        $form= $this->createForm( achatType::class, $achat);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $em =$this->getDoctrine()->getManager();

            $em->persist($achat);
            $em->flush();
        }

        return $this->render('achat/ajouterAchat.html.twig', ["form"=>$form->createView(),"produit"=>$produit]);
    }
    /**
     * @Route("/listAchat", name="achatlist")
     */
    public function listAchat()
    {
        $achat=$this->getDoctrine()->getRepository(Achat::class)->findAll();


        return $this->render("achat/index.html.twig",array("tabachat"=>$achat));
    }
    /**
     * @Route("/deleteAchat/{id}", name="achatDelete")
     */
    public function deleteAchat($id)
    {
        $achat=$this->getDoctrine()->getRepository(Achat::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($achat);
        $em->flush();
        return $this->redirectToRoute("achatlist");
    }
    /**
     * @Route("/updateAchat/{id}", name="updateachat")
     */
    public function updateAchat(Request $request,$id)
    {
        $achat=$this->getDoctrine()->getRepository(Achat::class)->find($id);
        $form=$this->createForm(AchatType::class,$achat);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute("achatlist");
        }
        return $this->render("achat/updateAchat.html.twig",array("form"=>$form->createView()));
    }

}
