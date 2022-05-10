<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Cours;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Symfony\Component\HttpFoundation\Request;


class CoursController extends AbstractController
{
    /**
     * @Route("/cours", name="app_cours")
     */
    public function index(): Response
    {
        return $this->render('cours/affichagefront.html.twig', [
            'controller_name' => 'CoursController',
        ]);
    }

    /**
     * @Route("/ajouterCours", name="addCours")
     */
    public function ajouterCours (Request $request,CoursRepository $CoursRepository): Response
    {
        $cours = new Cours();

        $em=$this->getDoctrine()->getManager();

        $form= $this->createForm(CoursType::class, $cours);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $cours->setEtat(1);
            $em =$this->getDoctrine()->getManager();

            $em->persist($cours);
            $em->flush();
            $this->addFlash('success','Cours ADED successfully');
            return $this->redirectToRoute('Courslist');
        }

        return $this->render('cours/ajouterCours.html.twig', ["form"=>$form->createView()]);
    }
    /**
     * @Route("/listCours", name="Courslist")
     */
    public function listCours()
    {
        $cours=$this->getDoctrine()->getRepository(Cours::class)->findAll();


        return $this->render("cours/index.html.twig",array("tabcours"=>$cours));
    }
    /**
     * @Route("/listCoursfront", name="Courslistfront")
     */
    public function listcoursfront(CoursRepository $repository,\Symfony\Component\HttpFoundation\Request $request, PaginatorInterface $paginator)
    {
        $cours=$this->getDoctrine()->getRepository(Cours::class)->findAll();

        $cours = $paginator->paginate(
            $cours = $repository->findAll(),
            $request->query->getInt('page', 1),
            3
        );
        return $this->render("cours/ListFrontCours.html.twig",["tabcours"=>$cours]);
    }
    /**
     * @Route("/deleteCours/{id}", name="coursDelete")
     */
    public function deleteCours($id)
    {
        $cours=$this->getDoctrine()->getRepository(Cours::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($cours);
        $em->flush();
        $this->addFlash('success','Cours Deleted successfully');
        return $this->redirectToRoute("Courslist");
    }
    /**
     * @Route("/updateCours/{id}", name="updatecours")
     */
    public function updateCours(Request $request,$id)
    {
        $cours=$this->getDoctrine()->getRepository(Cours::class)->find($id);
        $form=$this->createForm(CoursType::class,$cours);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            $this->addFlash('success','Cours Updated successfully');
            return $this->redirectToRoute("Courslist");

        }
        return $this->render("cours/updateCours.html.twig",array("form"=>$form->createView()));
    }
    /**
     * @Route("detailcours/{id}", name="cours_detail")
     */
    public function detailC(Cours $Cours): Response
    {

        return $this->render('produit/details_cours.html.twig', [
            'cours' => $Cours,
        ]);
    }


}
