<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class QuizController extends Controller {

    /**
     * @Route("/quiz/chosen-quiz/{id}", name="quiz")
     */
    public function quizToChooseAction(Request $request, $id) {
        //$quiz = $this->getDoctrine()->getRepository('AppBundle:Quiz')->findOneById($id);
        
        $content = $this->render('AppBundle:default:quiz.html.twig', array(
            'questions' => $this->getDoctrine()->getRepository('AppBundle:Question')->find5RandomQuestionsByQuiz($id)
                )
        );

        return new Response($content);
    }

}
