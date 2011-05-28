<?php

namespace GoGreat\DemoBundle\DataFixtures\ORM;

use Symfony\Component\DependencyInjection\ContainerAware;
use Doctrine\Common\DataFixtures\Loader;
use Doctrine\ORM\EntityManager;
use	Doctrine\Common\DataFixtures\FixtureInterface;
use GoGreat\DemoBundle\Entity\DemoComment;


class LoadDemoCommentData extends ContainerAware implements FixtureInterface
{
	public function load($manager)
	{
		for ($i = 0; $i < 10; $i++) {
			$comment = new DemoComment();
			$comment->setBody("DemoComment #{$i}");
			
			$manager->persist($comment);
		}
		
		$manager->flush();
	}
}


$loader = new Loader();
$loader->addFixture(new LoadDemoCommentData);