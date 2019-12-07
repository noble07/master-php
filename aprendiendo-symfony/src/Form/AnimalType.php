<?php

namespace App\Form;

use App\Entity\Animal;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipo', TextType::class, [
                'label' => 'Tipo de animal: '
            ])
            ->add('raza', TextType::class)
            ->add('color', TextType::class)
            ->add('submit', SubmitType::class, [
                'label' => 'Añadir animal',
                'attr' => ['class' => 'btn btn-succes']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}
