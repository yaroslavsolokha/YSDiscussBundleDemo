<?php

// src/YS/DiscussBundle/Form/DiscussType.php

namespace YS\DiscussBundle\Form;

use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class DiscussType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('discuss', CKEditorType::class, array(
        'config_name' => 'my_config'
      ))
    ;
  }
}