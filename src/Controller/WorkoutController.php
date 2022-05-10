<?php

namespace App\Controller;

use App\Entity\Workout;
use App\Form\WorkoutType;
use App\Repository\WorkoutRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/workout")
 */
class WorkoutController extends AbstractController
{
    /**
     * @Route("/workoutfront", name="app_workoutfront_index", methods={"GET"})
     */
    public function index(PaginatorInterface $paginator,Request $request,WorkoutRepository $workoutRepository):Response
    {

        $workouts=$paginator->paginate(
            $workouts=$workoutRepository->findAll(),
            $request->query->getInt('page', 1),3
        );

        return $this->render('workout/index.html.twig', [
            'workouts' => $workouts,
        ]);
    }



    /**
     * @Route("/workoutback", name="app_workout_index", methods={"GET"})
     */
    public function index1(PaginatorInterface $paginator,Request $request,WorkoutRepository $workoutRepository):Response
    {

        $workouts=$paginator->paginate(
            $workouts=$workoutRepository->findAll(),
            $request->query->getInt('page', 1),3
        );

        return $this->render('workout/indexback.html.twig', [
            'workouts' => $workouts,
        ]);
    }


    /**
     * @Route("/new", name="app_workout_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $workout = new Workout();
        $form = $this->createForm(WorkoutType::class, $workout);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new=$form->getData();
            $imageFile = $form->get('imageExercice')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        'uploads/images',
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $workout->setImageExercice($newFilename);
            }
            $entityManager->persist($workout);
            $entityManager->flush();

            return $this->redirectToRoute('app_workout_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('workout/new.html.twig', [
            'workout' => $workout,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/{id}", name="app_workout_show", methods={"GET"})
     */
    public function show(Workout $workout): Response
    {
        return $this->render('workout/show.html.twig', [
            'workout' => $workout,
        ]);
    }



    /**
     * @Route("/{id}/edit", name="app_workout_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Workout $workout, EntityManagerInterface $entityManager,$id,WorkoutRepository $repository)
    {
        $workout=$repository->find($id);
        $form = $this->createForm(WorkoutType::class, $workout);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new=$form->getData();
            $imageFile = $form->get('imageExercice')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        'uploads/images',
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $workout->setImageExercice($newFilename);
            }
            $entityManager->persist($workout);
            $entityManager->flush();

            return $this->redirectToRoute('app_workout_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('workout/edit.html.twig', [
            'workout' => $workout,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_workout_delete", methods={"POST"})
     */
    public function delete(Request $request, Workout $workout, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$workout->getId(), $request->request->get('_token'))) {
            $entityManager->remove($workout);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_workout_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("Liste", name="Liste" , methods={"GET"})
     */
    public function Liste()
    {
        $repository=$this->getDoctrine()->getRepository(Workout::class);
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);



        $workout=$repository->findall();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('workout/liste.html.twig',
            ['workout'=>$workout]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("workouts.pdf", [
            "Attachment" => true
        ]);


    }

}
