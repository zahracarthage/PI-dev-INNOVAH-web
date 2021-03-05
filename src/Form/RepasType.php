<?php

namespace App\Form;

use App\Entity\Repas;
use Doctrine\ORM\Mapping\Builder\FieldBuilder;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RepasType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description',TextareaType::class)
            ->add('price')

            ->add('category', ChoiceType::class, array(
                    'choices'=> array(
                        'sans-gluten'=>'sans-gluten',
                        'vegetarien'=>'vegetarien',
                        'Halal'=>'Halal',
                        'Diabetique'=>'Diabetique',
                        'Vegan'=>'Vegan',
                    )
                )
            )

            ->add('adresse')
            ->add('img')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Repas::class,
        ]);
    }
}
