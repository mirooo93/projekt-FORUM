<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response; //bitno za rute Request/Route and Response
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Controller\Task;

class HomeController extends Controller
{
    /**
     * @Route("/home", name="hom")
     */
    public function newAction(Request $request)
    {
       
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Task'])
            ->getForm();

        return $this->render('default/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}


//za startanje servera kod pokretanja
#php bin/console server:run n 