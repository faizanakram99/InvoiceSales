<?php

namespace Sales\SalesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address', null, [
                'label' => false
            ])
            ->add('date', null, [
                'label'=> false,
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd'
            ])
            ->add('email', null, [
                'label' => false
            ])
            ->add('products', CollectionType::class,[
                'by_reference' => false,
                'entry_type' => ProductType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'label' => false
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'Sales\SalesBundle\Entity\Invoice'
        ]);
    }
}
