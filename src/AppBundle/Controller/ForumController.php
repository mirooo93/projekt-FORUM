<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; //bitno za rute Request/Route and Response
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\RedditPost;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ForumController extends Controller
{
	/**
     * @Route("/", name="forum_list")
     * @Method({"GET"})
     */
	public function index(Request $request)
	{
		$posts = $this->getDoctrine()->getRepository('AppBundle:RedditPost')->findAll();
        dump($posts);

        return $this->render('reddit/forum.html.twig', [
            'posts' => $posts
        ]);
	}

	/**
     * @Route("/reddit/new", name="new_forum")
     * Method({"GET", "POST"})
     */

	public function new(Request $request)
	{
		$post = new RedditPost();
		
		$form = $this->createFormBuilder($post)
			->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
			->add('text', TextareaType::class, array('required' => false, 'attr' => array('class' => 'form-control')))
			->add('save', SubmitType::class, array('label' => 'Create', 'attr' => array('class' => 'btn btn-primary mt-3')))
			->getForm();

		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid())
		{
			$post = $form->getData();

			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($post);
			$entityManager->flush();

			return $this->redirectToRoute('forum_list');
		}
		return $this->render('reddit/new_post.html.twig', array('form' => $form->createView()));
	}

	/**
     * @Route("/reddit/{id}", name="forum_show")
     */
	public function show($id)
	{
		$post =$this->getDoctrine()->getRepository(RedditPost::class)->find($id);

		return $this->render('reddit/show.html.twig', array ('post' => $post));
	}	
}
