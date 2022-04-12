<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="app_reclamation")
     */
    public function index( UserInterface $user,Request $request): Response
    {
        $reclamation = new Reclamation();
        $username=$user->getPassword();
        $em=$this->getDoctrine()->getManager();
        $userr = $em->getRepository(User::class)->findOneBy(["password"=>$username]);
        $form= $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $idd=$userr->getId();
            $reclamation->setIduser($idd);
            $reclamation->setUsers($userr);
            $em =$this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
        }
        return $this->render('reclamation/index.html.twig', [
            "form"=>$form->createView(),
        ]);
    }
    /**
     * @Route("/admin/reclamation", name="reclamation_index", methods={"GET"})
     */
    public function listrec (Request $request ,ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/listreclamation.html.twig', [
            'reclamation' => $reclamationRepository->findAll(),
        ]);
    }
    /**
     * @Route("/deletereclamation/{id}", name="rec_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();

        }

        return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

}
