<?php

namespace CNC\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class UserType
 * @package ProductBundle\Form
 */
class UserType extends AbstractType {

  /**
   * @param FormBuilderInterface $builder
   * @param array $options
  */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('id')
      ->add('username')
      ->add('password');
  }

  /**
   * @param OptionsResolver $resolver
  */
  public function configureOptions(OptionsResolver $resolver) {
    $resolver->setDefaults(
      [
        'data_class' => 'CNC\ProductBundle\Entity\User',
        'csrf_protection' => false,
      ]
    );
  }

  /**
   * @return string
  */
  public function getName() {
    return 'cnc_productbundle_usertype';
  }
}