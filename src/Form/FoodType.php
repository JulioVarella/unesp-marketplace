<?php

namespace App\Form;

use App\Entity\Food;
use App\Entity\Seller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FoodType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('imagePath')
            ->add('createdAt')
            ->add('price')
            ->add('category')
            ->add('seller', EntityType::class, [
                'class' => Seller::class,
                'choice_label' => 'name', // Assuming the Seller has a 'name' property. Adjust if it's different.
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Food::class,
        ]);
    }
}
