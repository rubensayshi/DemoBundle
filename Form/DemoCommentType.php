<?php

namespace GoGreat\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DemoCommentType extends AbstractType
{
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder->add('body', 'text');
	}

	public function getDefaultOptions(array $options)
	{
		return array(
            'data_class' => 'GoGreat\DemoBundle\Entity\DemoComment',
		);
	}
}