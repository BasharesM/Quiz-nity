<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class SignUpController extends Controller{
  

  	/**
     * @Route("/", name="sign-up")
     */

  public function registerAction(Request $request){
        // build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //  Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                			 ->encodePassword($user, $user->getPlainPassword());
             				//->encodePassword($user, $user->getPassword());

            $user->setPassword($password);

            // save the User in user table

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like send them an email, etc
            // maybe set a "flash" success message for the user

            //return $this->redirectToRoute('replace_with_some_route'); --> Page start the Quiz
        }

        $content = $this->render('AppBundle:default:signUp.html.twig',array('form' => $form->createView()));
        return new Response($content);
    }
}