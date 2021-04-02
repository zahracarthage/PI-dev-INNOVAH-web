<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class,[
                'label'=>'Date Commande',
                'widget'=>'single_text',
                'attr'=>[
                    'placeholder'=>'Date Commande'
                ]
                ])
            ->add('quantite', NumberType::class, [
                'label'=>'Quantité Article',
                'attr'=>[
                    'placeholder'=>'Quantité'
                ]
                ])
            ->add('prix_total', NumberType::class, [
                    'label'=>'Prix Total',
                    'attr'=>[
                        'placeholder'=>'Prix Total'
                ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
