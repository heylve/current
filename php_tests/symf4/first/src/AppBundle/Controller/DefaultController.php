<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Task;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class DefaultController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction(Request $request)
	{
		// replace this example code with whatever you need
		return $this->render('default/index.html.twig', [
			'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
		]);
	}


	/**
	 * @Route("/new", name="new")
	 */
	//public function newAction(Request $request)
	//{
	//	// creates a task and gives it some dummy data for this example
	//	$task = new Task();
	//	$task->setTask('Write a blog post');
	//	$task->setDueDate(new \DateTime('tomorrow'));

	//	$form = $this->createFormBuilder($task)
	//		->add('task', TextType::class)
	//		->add('dueDate', DateType::class)
	//		->add('save', SubmitType::class, array('label' => 'Create Task'))
	//		->getForm();

	////	return $this->render('default/new.html.twig', array(
	////		'form' => $form->createView(),
	////	));
	//}


}
