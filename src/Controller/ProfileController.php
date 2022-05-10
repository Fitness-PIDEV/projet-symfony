<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditProfileType;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use App\Form\ResetPasswordType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfileController extends Controller
{
    /**
     * @Route("/profile", name="app_profile")
     */
    public function index(): Response
    {
        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
    /**
     * @Route("/{id}/profile_edit", name="profile_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $name= $user->getImage();
        $form = $this->createForm(EditProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($user->getImage()=="")
                $user->setImage($name);
            else
            {
                $file = new File($user->getImage());
                $fileName=md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'),    $fileName);
                $user->setImage($fileName);

            }
            $entityManager->flush();

            return $this->redirectToRoute('app_profile', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('profile/edit.html.twig', [
            'user' => $user,
            'registrationForm' => $form->createView(),
        ]);
    }
    /**
     * @Route("/profile/reset-password", name="profile_password")
     */
    public function resetPassword(Request $request, UserPasswordEncoderInterface $passwordEncoder)

    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $form = $this->createForm(ResetPasswordType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $passwordEncoder = $this->get('security.password_encoder');
            $oldPassword = $request->request->get('reset_password')['oldPassword'];
            // Si l'ancien mot de passe est bon
            if ($passwordEncoder->isPasswordValid($user, $oldPassword)) {
                $newEncodedPassword = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($newEncodedPassword);
                $em->persist($user);
                $em->flush();
                $this->addFlash('notice', 'Votre mot de passe à bien été changé !');
                return $this->redirectToRoute('app_profile');
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }

        }
        return $this->render('profile/resetPassword.html.twig', array(

            'form' => $form->createView(),

        ));
    }
}
