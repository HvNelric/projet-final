<?php

namespace App\Form;

use App\Entity\Activites;
use App\Entity\Region;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\DomCrawler\Field\ChoiceFormField;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'email',
                EmailType::class,
            [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]
            )
            ->add(
                'plainPassword',
                RepeatedType::class,
                [
                    'type' => PasswordType::class,
                    'first_options' => [
                        'label' => 'Mot de passe',
                        'attr' => [
                            'class' => 'form-control'
                        ],
                    ],
                    'second_options' =>[
                        'label' => 'Confirmation du mot de passe',
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ],
                ]
            )
            ->add(
                'sexe',
                    ChoiceType::class,
                    [
                        'multiple' => false,
                        'choices' => [
                            'Femme' => 'femme',
                            'Homme' => 'homme'
                        ],
                        'attr' => [
                            'class' => 'form-control'
                        ]
                    ]
                )
            ->add(
                'prenom',
                TextType::class,
                [
                    'label' => 'Prénom',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add(
                'nom',
                TextType::class,
                [
                    'label' => 'Nom',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add(
                'age',
                TextType::class,
                [
                    'label' => 'Age',
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
            )
            ->add(
                'date_dispo',
                DateType::class,
                    [
                        'label' => 'Date de début',
                        'attr' => [
                            'class' => 'js-datepicker',
                            'class' => 'form-control',
                            'html5' => false,
                            'widget' => 'single_text'
                        ]
                    ]
            )
            ->add(
                'date_fin',
                DateType::class,
                [
                    'label' => 'date fin',
                    'attr' => [
                        'class' => 'js-datepicker',
                        'class' => 'form-control',
                        'html5' => false,
                        'widget' => 'single_text'
                    ]
                ]
            )
            ->add(
                'activites',
                EntityType::class,
                [
                'class' => Activites::class,
                'multiple' => true,
                'expanded' => true,
                'required' => false,
                'choice_label' => 'getName',
                'attr' => [
                    'class' => 'form-control'
                ]
                ]
            )
            ->add(
                'region',
                    EntityType::class,
                    [

                        'class' => Region::class,
                        'multiple' => true,
                        'expanded' => true,
                        'required' => false,
                        'choice_label' => 'getRegion',
                        'attr' => [
                            'class' => 'form-check-input',
                            'class' => 'form-control'
                        ],

                    ]
                )
            ->add(
                'profil_img',
                FileType::class,
                [
                    'label' => 'Votre photo de profil : ',
                    'required' => false
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
