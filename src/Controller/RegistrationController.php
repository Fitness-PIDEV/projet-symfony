<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditProfileType;
use App\Form\EditUserType;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Repository\UserRepository;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\File;

class RegistrationController extends AbstractController
{
    public function __construct(Security $security,UserPasswordEncoderInterface $passwordEncoder)
    {

        $this->security = $security;
        $this->passwordEncoder = $passwordEncoder;
    }
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=new File ($user->getImage());
            $fileName= md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'),    $fileName);
            $user->setImage($fileName);
            // encode the plain password
            $user->setPassword(
            $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setRoles(['ROLE_USER']);
            $user->setActivationToken(md5(uniqid()));
            $message = (new TemplatedEmail())
                ->from(new Address('fitnessesprit8@gmail.com', 'Fitness Bot'))
                ->to($user->getEmail())
                ->subject('Welcome to Fitness')
                ->htmlTemplate('registration/activation.html.twig')
                ->context([
                    'token' => $user->getActivationToken(),
                ]);
            $mailer->send($message);
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    /**
     * @Route("/admin", name="user_index", methods={"GET"})
     */
    public function index(Request $request ,UserRepository $userRepository): Response
    {
        return $this->render('back/listusers.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET", "POST"})
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

            return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    /**
     * Donner Role
     * @Route("/back/role/{id}" , name="role_user")
     */
    public function userRole(User $user , Request $request , EntityManagerInterface $entityManager){
        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }
        return $this->render ('back/role.html.twig' , [
            'userForm' =>   $form->createView()
        ]);
    }
    /**
     * @Route("/delete/{id}", name="user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();

        }

        return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/activation/{token}", name="activation")
     */
    public function activation($token, UserRepository $users)
    {
        // On recherche si un utilisateur avec ce token existe dans la base de données
        $user = $users->findOneBy(['activation_token' => $token]);

        // Si aucun utilisateur n'est associé à ce token
        if(!$user){
            // On renvoie une erreur 404
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }

        // On supprime le token
        $user->setActivationToken(null);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // On génère un message
        $this->addFlash('message', 'Utilisateur activé avec succès');

        // On retourne à l'accueil
        return $this->redirectToRoute('app_profile');
    }

}
