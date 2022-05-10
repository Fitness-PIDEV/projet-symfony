<?php

namespace App\Controller;

use App\Entity\Abonnement;
use App\Form\AbonnementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/abonnement")
 */
class AbonnementController extends AbstractController
{
    /**
     * @Route("/", name="app_abonnement_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $abonnements = $entityManager
            ->getRepository(Abonnement::class)
            ->findAll();

        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $abonnements,
        ]);
    }

    /**
     * @Route("/abonnementfront", name="app_abonnementfront_index", methods={"GET"})
     */
    public function index1(EntityManagerInterface $entityManager): Response
    {
        $abonnements = $entityManager
            ->getRepository(Abonnement::class)
            ->findAll();

        return $this->render('abonnement/indexfront.html.twig', [
            'abonnements' => $abonnements,
        ]);
    }


    /**
     * @Route("/new", name="app_abonnement_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,MailerInterface $mailer): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($abonnement);
            $entityManager->flush();
            $email = (new TemplatedEmail())
                ->from(new Address('fitnessesprit8@gmail.com', 'Fitness Bot'))
                ->to(new Address ('omar.kaabi@esprit.tn'))
                ->subject('Votre abonnement')
                ->htmlTemplate('abonnement/email.html.twig');
            $mailer->send($email);

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('abonnement/new.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_abonnement_show", methods={"GET"})
     */
    public function show(Abonnement $abonnement): Response
    {
        return $this->render('abonnement/show.html.twig', [
            'abonnement' => $abonnement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_abonnement_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('abonnement/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_abonnement_delete", methods={"POST"})
     */
    public function delete(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$abonnement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($abonnement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_abonnement_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("triprix", name="triprix")
     */
    public function triPrix(Request $request, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT ev FROM App\Entity\Abonnement ev 
            ORDER BY ev.prix'
        );

        $eq = $query->getResult();
        $eq = $paginator->paginate(
            $eq,
            $request->query->getInt('page',1),
            8
        );
        return $this->render('abonnement/index.html.twig',
            array('abonnements' => $eq));
    }
    /**
     * @Route("stats", name="stats")
     */
    public function stat()
    {
        $repository = $this->getDoctrine()->getRepository(Abonnement::class);
        $abonnement = $repository->findAll();

        $em = $this->getDoctrine()->getManager();

        $cat1=0;
        $cat2=0;
        $cat3=0;
        $cat4=0;


        foreach ($abonnement as $abonnement)
        {
            if ( $abonnement->getType()=="Silver")  :

                $cat1+=1;
            else:

                $cat2+=1 ;


            endif;

        }
        $data=array_map(function (Abonnement $item){
        return [$item->getType(),5];
    },$repository->findAll());
    dump([array_merge([['abonnements', 'nombre']],$data)]);die;

      //  $data=array_map(function (Abonnement $item){
        //    return [$item->getType(),$item->getPrix()->count()];
        //},$repository->findAll());


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

        return $this->render('abonnement/stats.html.twig', array('piechart' => $pieChart));
    }


}
