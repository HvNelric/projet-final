<?php

namespace App\Form;

use App\Entity\Activites;
use App\Entity\Region;
use App\Entity\Sejour;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SejourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'ville',
                TextType::class,
                [
                    'label' => 'ville',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add(
                'prix',
                    TextType::class,
                    [
                        'label' => 'Le prix du séjour',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ]
                )
            ->add(
                'date_depart',
                    DateType::class,
                    [
                        'label' => 'date de départ',
                        'attr' => [
                            'class' => 'form-control js-datepicker',
                            'html5' => false,
                            'widget' => 'single-text'
                        ]
                    ]
                )
            ->add(
                'description',
                TextareaType::class,
                    [
                        'label' => 'description',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ]
            )
            ->add(
                'hebergement',
                    TextType::class,
                        [
                            'label' => 'Hebergement ',
                            'attr' => [
                                'class' => 'form-control'
                            ]
                        ]
                )
            ->add(
                'transport',
                    TextareaType::class,
                        [
                            'label' => 'Mode de transport ',
                            'attr' => [
                                'class' => 'form-control'
                            ]
                        ]
                )
            ->add(
                'ville_img',
                FileType::class,
                    [
                        'label' => 'Image du séjour ',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ]
            )
            ->add(
                'duree',
                TextType::class,
                    [
                        'label' => 'Durée du séjour ',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ]
            )
            ->add(
                'activites_sejour',
                    EntityType::class,
                    [
                        'class' => Activites::class,
                        'multiple' => false,
                        'expanded' => false,
                        'required' => true,
                        'choice_label' => 'getName',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ]
                )
            ->add(
                'region_sejour',
                        EntityType::class,
                    [
                        'class' => Region::class,
                        'multiple' => false,
                        'expanded' => false,
                        'required' => true,
                        'choice_label' => 'getRegion',
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
            'data_class' => Sejour::class
        ]);
    }
}
