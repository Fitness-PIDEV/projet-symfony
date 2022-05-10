<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('num',TextType::class,[
                "attr" =>[
                    "class" =>"form-control"
                ]
            ])
            ->add('nom',TextType::class,[
                "attr" =>[
                    "class" =>"form-control"
                ]
            ])
            ->add('prenom',TextType::class,[
                "attr" =>[
                    "class" =>"form-control"
                ]
            ])
            ->add('email',TextType::class,[
                "attr" =>[
                    "class" =>"form-control"
                ]
            ])
            ->add('image', FileType::class, array('data_class'=> null, 'required' => false,'attr'=>[
                "class" =>"form-control"]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
