<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class QuizController extends Controller {

    /**
     * @Route("/quiz/{id}", name="quiz")
     */
    public function quizToChooseAction(Request $request, $id) {
        $content = $this->render('AppBundle:default:quiz.html.twig', array(
            'questions' => $this->getDoctrine()->getRepository('AppBundle:Question')->get5QuestionsOfAQuiz($id)
                )
        );

        return new Response($content);
    }

}
