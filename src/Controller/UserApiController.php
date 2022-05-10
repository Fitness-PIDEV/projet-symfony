<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Users\Client;
use App\Entity\Users\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;
use function Symfony\Component\VarDumper\Dumper\esc;


class UserApiController extends AbstractController
{
    /**
     * @Route("/utilisateur/api", name="utilisateur_api")
     */
    public function index(): Response
    {
        return $this->render('User_api/index.html.twig', [
            'controller_name' => 'UserApiController',
        ]);
    }


    /**
     * @Route("/user/Signup", name="app_user_Signup")
     */
    public function Signup(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $email=$request->query->get("email");
        $nom=$request->query->get("nom");
        $prenom=$request->query->get("prenom");
        $num=$request->query->get("num");
        $password=$request->query->get("password");
        $roles=$request->query->get("roles");
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return new Response("email invalid");
        }
        $user = new \App\Entity\User();
        $user->setEmail($email);
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $password
            )
        );
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setNum($num);
        $user->setRoles(array($roles));
        $user->setRole("USER");

        try{
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new JsonResponse("Account is created",200);
        }catch (\Exception $ex){
            return new Response("exception".$ex->getMessage());
        }
    }

    /**
     * @Route("user/signin",name="app_loginmobile")
     */

    public function signinAction(Request $request){

        $email = $request->query->get("email");
        $password = $request->query->get("password");

        $em= $this->getDoctrine()->getManager();
        $client= $em->getRepository(\App\Entity\User::class)->findOneBy(['email'=>$email]);// find user by username

        if($client){
            if(password_verify($password,$client->getPassword())) {
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($client);
                return new JsonResponse($formatted);
            }
            else{
                return new Response("password not found");
            }

        }
        else{
            return new Response("user not found");

        }
    }

    /**
     * @Route("/user/editUser", name="app_user_editu")
     */
    public function EditUser(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $id=$request->get("id");
        $email=$request->query->get("email");
        $nom=$request->query->get("nom");
        $prenom=$request->query->get("prenom");
        $num=$request->query->get("num");
        $password=$request->query->get("password");
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository(\App\Entity\User::class)->find($id);

        $user->setEmail($email);
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $password
            )
        );
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setNum($num);

        try{
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new JsonResponse("success",200);
        }catch (\Exception $ex){
            return new Response("fail".$ex->getMessage());
        }

    }

    /**
     * @Route("user/getPasswordByEmail", name="app_user_passwordbyemail")
     */
    public function getPasswordbyemail(Request $request)
    {
        $email=$request->get('email');
        $user=$this->getDoctrine()->getManager()->getRepository(\App\Entity\User::class)->findOneBy(['email'=>$email]);
        if($user){
            $password=$user->getPassword();
            $serializer= new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize($password);
            return new JsonResponse($formatted);
        }
        return new Response("user not found");
    }



}
