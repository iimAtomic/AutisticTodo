<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\LoginAuthenticator;
use DeepCopy\Filter\Filter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/showRegister', name: 'show_register')]
    public function showRegister(): Response
    {
        return $this->render('security/register.html.twig');
    }
    
    
    
    
    #[Route('/register', name: 'app_register', methods:'POST')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, LoginAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        

        $nom=$request->request->get('nom');

        $email=$request->request->get('email');

        $password=$request->request->get('password');

        $password_confirm=$request->request->get('password_confirm');

        //Verification de l'email et du password

        $email_db=$entityManager->getRepository(User::class)->findOneByEmail($email);

        if(!Filter_var($email, FILTER_VALIDATE_EMAIL))
        {
             return $this->render('security/register.html.twig',
               [
                    'error'=>'Format de l\'email non valide'

               ]
             
            );
        }

        else if($email_db)
        {
            return $this->render('security/register.html.twig',
            [
                 'error'=>'Cet email existe déjà'

            ]
          
         );
        }

        else if($password !== $password_confirm)
        {
            return $this->render('security/register.html.twig',
            [
                 'error'=>'Les mots de passe ne sont pas identiques'

            ]
          
         );
        }

        else

           $user=new User();

           $user->setNom($nom)
                ->setEmail($email)
                ->setPassword($userPasswordHasher->hashPassword($user,$password));

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email


            //Creation du message flash via la session

            $session= $request->getSession();

            $session->getFlashBag()->add('notice','Compte créé avec succès ! Bienvenue !');

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

      
    
}
