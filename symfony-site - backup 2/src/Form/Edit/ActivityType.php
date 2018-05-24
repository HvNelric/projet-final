<?php

namespace App\Form\Edit;

use App\Entity\Activites;
use App\Entity\Region;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
                                'class' => 'form-control form-check-input'
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
