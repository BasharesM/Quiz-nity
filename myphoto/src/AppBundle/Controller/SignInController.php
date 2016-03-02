<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;
use AppBundle\Entity\User;
use AppBundle\Form\UserType2;

class SignInController extends Controller{
  

  /**
     * @Route("/sign-in", name="sign-in")
     */

    public function authentificationAction(Request $request) {
    	$user = new User();
        $userType2 = new UserType2();
        $form = $this->createForm($userType2, $user);

        // handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

        	$user->$this->getUsername();
        	$user->$this->getPlainPassword();

        	 // test if the user is in user table

            $em = $this->getDoctrine()->getManager();
          
            //$em->persist($user);
            //$em->flush();
   		}

        $content = $this->render('AppBundle:default:signIn.html.twig',array('form' => $form->createView()));
        return new Response($content);
    }
}