<?php

namespace AppBundle\Controller;

use Symfony\Bridge\Twig\AppVariable;
use AppBundle\Entity\RedditComment;
use AppBundle\Entity\RedditPost;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; //bitno za rute Request/Route and Response
use Symfony\Component\Routing\Annotation\Route;

class ForumController extends Controller
{
	/**
     * @Route("/", name="forum_list")
     * @Method({"GET"})
     */
	public function index(Request $request)
	{
		$posts = $this->getDoctrine()->getRepository('AppBundle:RedditPost')->findAll();
		$users = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
        dump($posts);
        dump($users);  //ovako mogu pratit sta saljem 

        return $this->render('reddit/forum.html.twig', ['posts' => $posts, 'users' => $users]);
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
			->add('text', TextareaType::class, array('attr' => array('class' => 'form-control')))
			->add('image', FileType::class, array('required' => false, 'label' => 'Insert image:', 'data_class' => null))
			->add('save', SubmitType::class, array('label' => 'Create', 'attr' => array('class' => 'btn btn-primary mt-3')))
			->getForm();
		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid())
		{
			$file=$post->getImage();
			if(is_null($file))
			{
				$file = 'no image';
				$post = $form->getData();
				$entityManager = $this->getDoctrine()->getManager();
				$post->setUserId($this->getUser());
				$entityManager->persist($post);
				$entityManager->flush();
			}
			else
			{
				$fileName = md5(uniqid()).'.'.$file->guessExtension();  //ovo mi daje uniq name
				$file->move($this->getParameter('image_directory'), $fileName);	

				$post = $form->getData();
				$post->setImage($fileName);
				$entityManager = $this->getDoctrine()->getManager();
				$post->setUserId($this->getUser());
				$entityManager->persist($post);
				$entityManager->flush();	
			}		
			return $this->redirectToRoute('forum_list');  //nakon sta potvrdim komentar
		}
		//$post =$this->getDoctrine()->getRepository(RedditPost::class)->find($id);
		return $this->render('reddit/new_post.html.twig', array('form' => $form->createView()));
	}

	/**
     * @Route("/reddit/{id}", name="forum_show")
     * @Method({"GET"})
     */
	public function show(Request $request, $id)
	{
		$com = new RedditComment();
		
		$form = $this->createFormBuilder($com)
			->add('comment', TextareaType::class, array('attr' => array('class' => 'form-control')))
			->add('save', SubmitType::class, array('label' => 'Done', 'attr' => array('class' => 'btn btn-primary mt-3')))
			->getForm();
		$form->handleRequest($request);
		if($form->isSubmitted() && $form->isValid())
		{
			$com = $form->getData();
			$entityManager = $this->getDoctrine()->getManager();

			$com->setUserId($this->getUser());
			$post =$this->getDoctrine()->getRepository(RedditPost::class)->find($id);
			$com->setPostId($post);
			$entityManager->persist($com);
			$entityManager->flush();
			//return $this->redirectToRoute('forum_list');
		}
		$post =$this->getDoctrine()->getRepository(RedditPost::class)->find($id);
		$comments =$this->getDoctrine()->getRepository(RedditComment::class)->findBy(['postId' => $id]);
		//$comments =$this->getDoctrine()->getRepository(RedditComment::class)->findAll();
		return $this->render('reddit/show.html.twig', array('post' => $post, 'comments' => $comments,'form' => $form->createView()));
	}

	/**
     * @Route("/reddit/edit/{id}", name="edit_forum")
     * Method({"GET", "POST"})
     */
	public function edit(Request $request, $id)  //edit/update 
	{
		$post = new RedditPost();
		$post = $this->getDoctrine()->getRepository(RedditPost::class)->find($id);
		
		$form = $this->createFormBuilder($post)
			->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
			->add('text', TextareaType::class, array('required' => false, 'attr' => array('class' => 'form-control')))
			->add('save', SubmitType::class, array('label' => 'Done', 'attr' => array('class' => 'btn btn-primary mt-3')))
			->getForm();
		$form->handleRequest($request);

		if($form->isSubmitted() && $form->isValid())
		{
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->flush();
			return $this->redirectToRoute('forum_list');
		}
		return $this->render('reddit/edit_post.html.twig', array('form' => $form->createView()));
	}
	
}
