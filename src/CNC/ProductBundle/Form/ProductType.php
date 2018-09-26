<?php

namespace CNC\ProductBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class ProductType
 * @package ProductBundle\Form
 */
class ProductType extends AbstractType {

  /**
   * @param FormBuilderInterface $builder
   * @param array $options
  */
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add('id')
      ->add('titulo')
      ->add('descripcion')
      ->add('fechaInicio')
      ->add('fechaTermino')
      ->add('precio')
      ->add('imagen')
      ->add('vendidos')
      ->add('tags');
  }

  /**
   * @param OptionsResolver $resolver
  */
  public function configureOptions(OptionsResolver $resolver) {
    $resolver->setDefaults(
      [
        'data_class' => 'CNC\ProductBundle\Entity\Product',
        'csrf_protection' => false,
      ]
    );
  }

  /**
   * @return string
  */
  public function getName() {
    return 'cnc_productbundle_type';
  }
}