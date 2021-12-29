<?php

namespace App\Form;

use App\Entity\Vendor;
use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class VendorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,
            [
                'label' => 'Vendor name',
                'required' => true,
                'attr' =>
                [
                    'minlength' => 3
                ]
            ])
            ->add('address', TextType::class,
            [
                'label' => 'Vendor address',
                'required' => true,
                'Widget' => 'single_text'
            ])
            ->add('contactNumber', TextType::class,
            [
                'label' => 'Vender contactNumber',
                'required' => true,
                'attr' => [
                    'minlength' => 5
                ]
            ])
            ->add('products', EntityType::class,
            [
                'label' => 'Vendor products', 
                'required' => true,
                'attr' =>[
                    'minlength' => 10
                ]    
            ])
            ;

            }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vendor::class,
        ]);
    }
}
