<?php

namespace App\Controller;


use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="app_categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/affichagefront.html.twig.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
    /**
     * @Route("/ajouterCategorie", name="addcategorie")
     */
    public function ajoutercategorie (Request $request,CategorieRepository  $categorieRepository): Response
    {
        $categorie = new Categorie();

        $em=$this->getDoctrine()->getManager();

        $form= $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $categorie->setEtat(1);
            $em =$this->getDoctrine()->getManager();
               $em->persist($categorie);
            $em->flush();
            $this->addFlash('success','Categorie ADED successfully');
            return $this->redirectToRoute('Categorielist');
        }

        return $this->render('categorie/ajouterCategorie.html.twig', ["form"=>$form->createView()]);
    }
    /**
     * @Route("/listCategorie", name="Categorielist")
     */
    public function listCategorie()
    {
        $categorie=$this->getDoctrine()->getRepository(Categorie::class)->findAll();


        return $this->render("categorie/index.html.twig",array("tabcat"=>$categorie));
    }
    /**
     * @Route("/deleteCategorie/{id}", name="categorieDelete")
     */
    public function deleteCategorie($id)
    {
        $categorie=$this->getDoctrine()->getRepository(Categorie::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        $this->addFlash('success','Categorie Deleted successfully');
        return $this->redirectToRoute("Categorielist");
    }
    /**
     * @Route("/updateCategorie/{id}", name="updatecategorie")
     */
    public function updateCategorie(Request $request,$id)
    {
        $categorie=$this->getDoctrine()->getRepository(Categorie::class)->find($id);
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            $this->addFlash('success','Categorie Updated successfully');
            return $this->redirectToRoute("Categorielist");
        }
        return $this->render("categorie/updateCategorie.html.twig",array("form"=>$form->createView()));
    }




}
