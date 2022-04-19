<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomProduit')
            ->add('prixProduit')
            ->add('imageProduit',FileType::class, array('data_class'=> null, 'required' => false))
            ->add('quantiteProduit')
            ->add('idCategorie',HiddenType::class)
            ->add('categories',EntityType::class,[
                    "attr"=>[
                        "class"=>"form-control"
                    ],
                    'class'=>Categorie::class,'required'=>false,
                    'choice_label' => 'nomCategorie',
                ]
            )
            ->add('etat',HiddenType::class)
            ->add('description')


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
