<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class QuizToChooseController extends Controller {

    /**
     * @Route("/quiz-to-choose", name="quiz-to-choose")
     */
    public function quizToChooseAction(Request $request) {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM AppBundle:Quiz a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            1/*limit per page*/
        );

    // parameters to template
    return $this->render('AppBundle:default:quizToChoose.html.twig',array('pagination' => $pagination));
}

}
