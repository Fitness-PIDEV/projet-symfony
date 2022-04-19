<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Knp\Component\Pager\PaginatorInterface;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="app_produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @Route("/ajouterProduit", name="addproduits")
     */
        public function ajouter (Request $request,ProduitRepository $produitRepository): Response
        {
        $produit = new Produit();

        $em=$this->getDoctrine()->getManager();

        $form= $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $file=new File($produit->getImageProduit());
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'),$fileName);
            $produit->setImageProduit($fileName);
            $produit->setIdCategorie(1);
            $produit->setEtat(1);
        $em =$this->getDoctrine()->getManager();

        $em->persist($produit);
        $em->flush();
            $this->addFlash('success','Produit ADED successfully');
            return $this->redirectToRoute('Produitslist');

        }

            return $this->render('produit/ajouterProduit.html.twig', ["form"=>$form->createView()]);
}
    /**
     * @Route("/listProduit", name="Produitslist")
     */
    public function listProduit()
    {
        $produit=$this->getDoctrine()->getRepository(Produit::class)->findAll();


        return $this->render("produit/index.html.twig",array("tabproduit"=>$produit));
    }
    /**
     * @Route("/listProduitfront", name="Produitslistfront")
     */
    public function listProduitfront(ProduitRepository $repository,\Symfony\Component\HttpFoundation\Request $request, PaginatorInterface $paginator)
    {
        $produit=$this->getDoctrine()->getRepository(Produit::class)->findAll();
        $category=$this->getDoctrine()->getRepository(Categorie::class)->findAll();
        $produit = $paginator->paginate(
            $produit = $repository->findAll(),
            $request->query->getInt('page', 1),
            3
        );
        return $this->render("produit/listFrontproduit.html.twig",["tabproduit"=>$produit,"tabcategorie"=>$category]);
    }

    /**
     * @Route("/deleteProduit/{id}", name="produitDelete")
     */
    public function deleteProduit($id)
    {
        $produit=$this->getDoctrine()->getRepository(Produit::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        $this->addFlash('success','Produit deleted successfully');
        return $this->redirectToRoute("Produitslist");
    }
    /**
     * @Route("/updateProduit/{id}", name="updateproduits")
     */
    public function updateProduit(Request $request,$id)
    {
        $produit=$this->getDoctrine()->getRepository(Produit::class)->find($id);
        $form=$this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute("Produitslist");
        }
        return $this->render("produit/updateProduit.html.twig",array("form"=>$form->createView()));
    }

    /**
     * @Route("/recherche", name="recherche_prod")
     */
    public function Recherche(ProduitRepository $produitRepository,Request $request)
    {
        $data=$request->get("key");
        $produit=$produitRepository->findAll();
        $chosen=array();
        foreach($produit as $p){
            if(str_contains(strtoupper($p->getNomProduit()), strtoupper($data))){
                array_push($chosen,$p);
            }
        }
        return $this->render('produit/index.html.twig',
            ['tabproduit' => $chosen]);
    }

    /**
     * @Route("/stats", name="stats")
     */
    public function stat()
    {
        $repository = $this->getDoctrine()->getRepository(Categorie::class);
        $produit = $repository->findAll();

        $em = $this->getDoctrine()->getManager();

        $cat1=0;
        $cat2=0;
        $cat3=0;
        $cat4=0;


        foreach ($produit as $produit)
        {
            if ( $produit->getnomCategorie()=="test")  :

                $cat1+=1;
            else:

                $cat2+=1 ;


            endif;

        }
        //$data=array_map(function (Categorie $item){
        //return [$item->getNomCategorie(),5];
//},$repository->findAll());
//dump([array_merge([['categories', 'nombre']],$data)]);die;

        $data=array_map(function (Categorie $item){
            return [$item->getNomCategorie(),$item->getProduits()->count()];
        },$repository->findAll());


        array_unshift($data,['Task', 'Hours per Day']);



        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable($data);
        $pieChart->getOptions()->setTitle('Listes des produits par Catégorie ');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('produit/stats.html.twig', array('piechart' => $pieChart));
    }

    /**
     * @Route("detail/{id}", name="produit_detail")
     */
    public function detailP(Produit $produit): Response
    {

        return $this->render('produit/details.html.twig', [
            'produit' => $produit,
        ]);
    }



}
