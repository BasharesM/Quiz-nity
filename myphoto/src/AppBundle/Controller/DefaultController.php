<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Post;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }
    
    /**
     * @Route("/connexion", name="loginPage")
     */
    public function loginAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig', array(
                    'base_dir' => realpath($this->container->getParameter('kernel.root_dir') . '/..'),
        ));
    }

    /**
     * @Template("default/toto.html.twig")
     * @Route("/toto/{param}", name="totopage")
     */
    public function totoAction(Request $request, $param) {
//        $logger = $this->get('logger');
//        $logger->info('Voici mon paramètre pour le TP : ' . $param);

        return [
            'posts' => $this->getDoctrine()->getRepository('AppBundle:Post')->findAll()
        ];

//        $em = $this->get('doctrine.orm.default_entity_manager');
//        // création
//        $post = new Post();
//        $post->setTitle('Titre du post');
//        $post->setContent('Corps du post');
//        $post->setCreatedAt(new \DateTime());
//        $post->setUpdatedAt(new \DateTime());
//        $post->setSlug('titre-du-post');
//        $em->persist($post);
//        $em->flush();
//        
//        // modification
//        $post->setTitle('Titre modifié');
//        $em->persist($post);
//        $em->flush();
//        
//        // suppression
//        $em->remove($post);
//        $em->flush();

//        return new Response();
    }

}
