<?php

namespace GoGreat\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use GoGreat\DemoBundle\Form\DemoCommentType;

class DemoUserType extends AbstractType
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder->add('name', 'text');
		$builder->add('comments', 'entity', array(
			'class'			=> 'GoGreat\DemoBundle\Entity\DemoComment',
			'property'		=> 'body',
			'expanded'		=> true,
			'multiple'		=> true,
		));
	}

	public function getDefaultOptions(array $options)
	{
		return array(
            'data_class' => 'GoGreat\DemoBundle\Entity\DemoUser',
		);
	}
}