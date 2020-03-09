<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/testiranje", name="list")
     */
    public function indexAction(Request $request)
    {
        $posts = $this->getDoctrine()->getRepository('AppBundle:RedditPost')->findAll();
        dump($posts);

        return $this->render('reddit/index.html.twig', [
            'posts' => $posts
        ]);
    }
}

