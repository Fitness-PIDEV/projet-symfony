<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

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
        $rec=$reclamationRepository->findAll();
        $r1=0;
        $r3=0;
        foreach ($rec as $reclamation)
        {
            if ( $reclamation->getEtat()==1)  :
                $r1+=1;
            else:
                $r3+=1;
            endif;
        }
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['etat', 'nombre'],
                ['Trait??', $r1],
                ['Non trait??', $r3],
            ]
        );
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
        return $this->render('reclamation/listreclamation.html.twig', [
            'reclamation' => $rec,'piechart' => $pieChart
        ]);
    }
    /**
     * @Route("/deletereclamation/{id}", name="rec_delete")
     */
    public function deletereclamation($id)
    {
        $id= $this->getDoctrine()->
        getRepository(Reclamation::class)->find($id);
        $em= $this->getDoctrine()->getManager();
        $em->remove($id);
        $em->flush();
        return $this->redirectToRoute("reclamation_index");
    }
    /**
     * @Route("/admin/{id}/valide", name="reclamation_valide")
     * @param Reclamation $reclamation
     * @return RedirectResponse
     */
    public function valide (Reclamation $reclamation, MailerInterface $mailer): RedirectResponse
    {
        $user=$reclamation->getUsers()->getEmail();
        $reclamation->setEtat(1);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $email = (new TemplatedEmail())
            ->from(new Address('fitnessesprit8@gmail.com', 'Fitness Bot'))
            ->to($user)
            ->subject('Votre reclamation')
            ->htmlTemplate('reclamation/email.html.twig');
        $mailer->send($email);
        return $this->redirectToRoute("reclamation_index");
    }

}
