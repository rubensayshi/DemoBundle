<?php

namespace GoGreat\DemoBundle\Controller;


use GoGreat\DemoBundle\Form\DemoUserType;
use GoGreat\DemoBundle\Entity\DemoUser;
use GoGreat\DemoBundle\Entity\DemoComment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DemoController extends Controller
{
    public function formAction()
    {
    	$form 		= $this->get('form.factory')->create(new DemoUserType());
		$request 	= $this->get('request');
		$user	 	= new DemoUser();
		$em			= $this->get('doctrine.orm.entity_manager');
			
		$form->setData($user);
		
		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);

			if ($form->isValid()) {		

				foreach ($user->getComments() as $comment) {
					var_dump($comment->getAuthor());
				}
				
				$em->persist($user);
				$em->flush();
			}
		}
		
        return $this->render('DemoBundle:Demo:form.html.twig', array(
				'form'			=> $form->createView(),
		));
    }
    
    public function doAction()
    {
		$em			= $this->get('doctrine.orm.entity_manager');

		$user 		= new DemoUser();
		$comment	= new DemoComment();
		
		$user->setName('DemoUser');
		$comment->setBody('DemoComment');
		
		$user->addComments($comment);
		
		$em->persist($user);
		$em->flush();
		

		return new Response('do .. done ..');
    }
}
