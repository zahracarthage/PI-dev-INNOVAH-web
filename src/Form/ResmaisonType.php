<?php

namespace App\Form;

use App\Entity\Resmaison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ResmaisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateentre', DateType::class,[
                'attr' => ['class' => 'form-control '],

                'widget' =>'single_text',

            ])
                
            ->add('datesortie', DateType::class,[
                'attr' => ['class' => 'form-control '],

                'widget' =>'single_text',

            ])
                
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Resmaison::class,
        ]);
    }
}
