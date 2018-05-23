<?php

namespace App\Form\Edit;

use App\Entity\User;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImgType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'profil_img',
                FileType::class,
                [
                    'label' => 'Changer votre photo',
                    'required' => false
                ]
            )
//            ->add('password')
//            ->add('date_dispo')
//            ->add('date_fin')
//            ->add('activites')
//            ->add('region')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class
        ]);
    }
}
