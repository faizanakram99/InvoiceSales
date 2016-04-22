<?php

namespace Sales\SalesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Sales\SalesBundle\Form\ProductsType;

class InvoiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('number', null, array(
                'label'=>false
            ))
            ->add('address', null, array(
                'label'=>false
            ))
            ->add('date',null, array(
                'label'=>false,
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd'
            ))
            ->add('email', null, array(
                'label'=>false
            ))
            ->add('products', CollectionType::class,array(
                'entry_type'=> ProductsType::class,
                'allow_add'=> true,
                'allow_delete'=> true,
                'label'=>false

            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sales\SalesBundle\Entity\Invoice'
        ));
    }
}
