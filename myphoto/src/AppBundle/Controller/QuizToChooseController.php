<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class QuizToChooseController extends Controller{


  	/**
     * @Route("/quiz-to-choose", name="quiz-to-choose")
     */

  public function quizToChooseAction(Request $request){
  	 $url = "url";
  	 $templating = $this->get('templating');  
  	 $content = $this->render('AppBundle:default:quizToChoose.html.twig', array('url' => $url));
     return new Response($content);
  }

}