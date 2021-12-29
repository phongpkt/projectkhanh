<?php

namespace App\Form;

use App\Entity\Customer;
use App\Entity\Product;
use App\Entity\Order;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class,
            [
                'label' => 'Order date',
                'required' => true,
                'widget' => 'single_text'
            ])
            ->add('quantity', NumberType::class,
            [
                'label' => 'Quantity',
                'required' => true,
                'attr' =>
                [
                    'min' => 0,
                    'max' => 10
                ]
            ])
            ->add('location', TextType::class,
            [
                'label' => 'Order location',
                'required' => true,
                'attr' =>
                [
                    'minlength' => 3
                ]
            ])
            ->add('status', ChoiceType::class,
            [
                'label' => 'Status',
                'required' => true,
                'choices' =>
                [
                    'Verified' => 'Verified',
                    'Shipping' => 'Shipping',
                    'Delivered' => 'Delivered',
                    'Canceled' => 'Canceled'
                ]
            ])
            ->add('customer', EntityType::class,
            [
                'label' => 'Customer',
                'class' => Customer::class,
                'required' => true,
                'attr' =>
                [
                    'minlength' => 3
                ]
            ])
            ->add('product', EntityType::class,
            [
                'label' => 'Product(s)',
                'class' => Product::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => false
            ])
            ->add('employee', EntityType::class,
            [
                'label' => 'Employee',
                'class' => Employee::class,
                'choice_label' => 'name',
                'multiple' => false,
                'expanded' => false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
