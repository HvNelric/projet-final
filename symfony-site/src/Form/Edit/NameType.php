<?php

namespace App\Form\Edit;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'prenom',
                TextType::class,
                [
                    'label' => 'Prénom ',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
                )
            ->add(
                'nom',
                    [
                        'label' => 'Nom',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ]
                )

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
