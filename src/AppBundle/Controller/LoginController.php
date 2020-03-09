<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; //bitno za rute Request/Route and Response
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Controller\Task;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="log")
     */
    public function newAction(Request $request)
    {
       
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class)
            ->add('password', PasswordType::class)
            ->add('save', SubmitType::class, ['label' => 'Login'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $task = $form->getData();
            return $this->redirectToRoute('hom'); 
        } 
        return $this->render('default/login.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

    
//za startanje servera kod pokretanja
#php bin/console server:run 