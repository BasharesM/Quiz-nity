<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class FinalQuizController extends Controller {

    /**
     * @Route("/quiz/quiz-end", name="quiz-end")
     */
    public function quizEndAction(Request $request) {
        $url = "url";
        $content = $this->render('AppBundle:default:quizEnd.html.twig', array('url' => $url));
        return new Response($content);
    }

}
