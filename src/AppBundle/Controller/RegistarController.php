<?php

namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; //bitno za rute Request/Route and Response
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class RegistarController extends Controller
{
    /**
     * @Route("/registar", name="reg")
     */
    public function newAction(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = new User();
        

        $form = $this->createForm(UserType::class, $user);
    
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('log');
            
        }
        return $this->render('reddit/testiranje.html.twig', ['form' => $form->createView()]);
    }
}


//za startanje servera kod pokretanja
#php bin/console server:run 

//stvaranje baze
#C:\xampp\htdocs\my_project>C:\xampp\htdocs\my_project>php bin/console doctrine:database:create

//stvaranje tablica
#php bin/console doctrine:schema:update --force

//get i set mi tribaju kad kreiram protected varijable pa da ih mogu koristit za print i slincno, a ako nemam get/set onda koristim public pa samo isprintam sta zelim

//nakon svake promjene u bazi trebas je updateat jer ti inace nece valjat i pucat ce stranica

//svaki komentar/putanja kod get/set-a je potrebna inace nece nista ispisat !

//ctrl+shift+P ->install -> biras paket/teme

//read, update & delete je treci video (part3) i to mu uglavnom nista ne triba jer se radi preko PUTANJE

//dodavanje ugradenih formi za symfony
#composer require symfony/form 

//za izradu gotovih formi 
#Package sensio/generator-bundle is abandoned, you should avoid using it. Use symfony/maker-bundle instead.

//prosirivanje na defoult html/twig postavljenu stranicu u projektu
#{% extends 'base.html.twig' %}

#warning pri instalaciji migracija, vjerovatno preporuka da se koriste druge stvari za mojeu verziju
//Package sensio/generator-bundle is abandoned, you should avoid using it. Use symfony/maker-bundle instead.
//Package zendframework/zend-eventmanager is abandoned, you should avoid using it. Use laminas/laminas-eventmanager instead.
//Package zendframework/zend-code is abandoned, you should avoid using it. Use laminas/laminas-code instead.

//za doviranje sql formata iz CMD-a
#php bin/console doctrine:schema:update --dump-sql

// <form action="{{ path('login') }}" method ="post"> </form>

//trazenje putanje do projekta pa staratanje servera:
//C:\Users\Miro> cd C:\

//C:\>cd xampp

//C:\xampp>cd htdocs

//C:\xampp\htdocs>cd my_project

//C:\xampp\htdocs\my_project>php bin/console server:run

//http://localhost:8000/