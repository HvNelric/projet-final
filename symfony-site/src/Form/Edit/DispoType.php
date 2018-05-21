<?php

namespace App\Form\Edit;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DispoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'date_dispo',
                    DateType::class,
                        [
                            'label' => 'Date debut de disponibilité ',
                            'attr' => [
                                'class' => 'js-datepicker form-control',
                                'html' => false,
                                'widget' => 'single_text'
                            ]
                        ]
                )
            ->add(
                'date_fin',
                [
                    'label' => 'Date fin de disponibilité ',
                    'attr' => [
                        'class' => 'js-datepicker form-control',
                        'html' => false,
                        'widget' => 'single_text'
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
