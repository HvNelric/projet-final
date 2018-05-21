<?php

namespace App\Form\Edit;

use App\Entity\Region;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegionEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
                            'class' => 'form-check-input form-control'

                        ],
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
