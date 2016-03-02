<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Post;
use AppBundle\Entity\User;
use AppBundle\Form\UserType2;
use AppBundle\Repository\UserRepository;

use Doctrine\ORM\EntityManager;


//use 

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

          $repository = $this->getDoctrine()->getRepository('AppBundle:User');
          
          $username = $user->getUsername();
          $password = $user->getPlainPassword();

          if($repository->findUser($username,$password) != null){
             return $this->redirectToRoute('quiz-to-choose'); 
          }
          
            
   		}

        $content = $this->render('AppBundle:default:signIn.html.twig',array('form' => $form->createView()));
        return new Response($content);
     
    }
}