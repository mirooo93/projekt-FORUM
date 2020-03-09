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
use AppBundle\Controller\Task;

class RegistarController extends Controller
{
    /**
     * @Route("/registar")
     */
    public function newAction(Request $request)
    {
       
        $user = new User();
        $user->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($user)
            ->add('username', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'password-field']],
                'required' => true,
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
            ])
            
            ->add('save', SubmitType::class, ['label' => 'Registar'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();

            return $this->redirectToRoute('log');  //prebacivanje na login preko name-a u ruti
         }
        return $this->render('default/registar.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function validate(User $user)
    {
            $link = $this->connectToDatabase();
            $result_object = mysqli_query( $link,"SHOW TABLES");
            $result = mysqli_fetch_all($result);
            foreach($result as $korisnik)
            {
                if($user.getEmail() == $korisnik.getEmail())
                    return true;
            }
            return false;
    }
    
    public function connectToDatabase()
    {
        $link = mysqli_connect('localhost', 'symfony', '123456', 'symfony');
        mysqli_set_charset($link,'UTF-8');
        return $link;
    }   
}


//za startanje servera kod pokretanja
#php bin/console server:run 

//stvaranje baze
#C:\xampp\htdocs\my_project>php bin/console doctrine:database:create

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