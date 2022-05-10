<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Entity\Produit;
use App\Entity\User;
use App\Repository\LivraisonRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\LivraisonType;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Security\Core\User\UserInterface;

class LivraisonController extends AbstractController
{
    /**
     * @Route("/livraison", name="app_livraison")
     */
    public function index(): Response
    {
        return $this->render('livraison/index.html.twig', [
            'controller_name' => 'LivraisonController',
        ]);
    }

    /**
     * @Route("/{id}/ajouterLivraison", name="addlivraison")
     *
     */
    public function ajouterlivraison (Request $request,UserInterface $user,$id): Response
    {
        $livraison = new Livraison();
        $em=$this->getDoctrine()->getManager();
        $username=$user->getPassword();
        $userr = $em->getRepository(User::class)->findOneBy(["password"=>$username]);
        $produit = $em->getRepository(Produit::class)->findOneBy(["id"=>$id]);


        $form= $this->createForm( livraisonType::class, $livraison);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $em =$this->getDoctrine()->getManager();
            $livraison->setUsers($userr);
            $livraison->setProduits($produit);
            $livraison->setIdUser($livraison->getUsers()->getId());
            $livraison->setFraisLivraison(5);

            $em->persist($livraison);
            $em->flush();
        }

        return $this->render('livraison/ajouterLivraison.html.twig', ["form"=>$form->createView(),"user"=>$userr,"produit"=>$produit]);
    }
    /**
     * @Route("/listLivraison", name="livraisonlist")
     */
    public function listLivraison(LivraisonRepository $repository, PaginatorInterface $paginator, Request $request)
    {
        $livraison=$this->getDoctrine()->getRepository(Livraison::class)->findAll();

        $livraison = $paginator->paginate(
            $livraison = $repository->findAll(),
            $request->query->getInt('page', 1),
            3
        );

        return $this->render("livraison/index.html.twig",array("tablivraison"=>$livraison));
    }
    /**
     * @Route("/deleteLivraison/{id}", name="livraisonDelete")
     */
    public function deleteLivraison($id)
    {
        $livraison=$this->getDoctrine()->getRepository(Livraison::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($livraison);
        $em->flush();
        return $this->redirectToRoute("livraisonlist");
    }
    /**
     * @Route("/updateLivraison/{id}", name="updatelivraison")
     */
    public function updateProduit(Request $request,$id)
    {
        $livraison=$this->getDoctrine()->getRepository(Livraison::class)->find($id);
        $form=$this->createForm(LivraisonType::class,$livraison);
        $form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute("livraisonlist");
        }
        return $this->render("livraison/updateLivraison.html.twig",array("form"=>$form->createView()));
    }

    /**
     * @Route("/imprimer_f", name="imprimer_f")
     */


    public function imprime(LivraisonRepository $repository): Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $livraison = $repository->findAll();
        $html = $this->renderView('livraison/mypdf.html.twig', [
            'livraison' => $livraison,
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("Liste  des livraisons.pdf", [
            "Attachment" => true
        ]);
        return $this->redirectToRoute('livraisonlist');
    }

}
