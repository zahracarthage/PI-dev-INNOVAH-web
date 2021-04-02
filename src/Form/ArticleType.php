<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\ChoiceList\ChoiceList;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class,[
                'label'=>'Nom Article',
                'attr'=>[
                    'placeholder'=>'Merci de définir le nom'
                ]
            ])
            ->add('description',TextType::class,[
                'label'=>'Description',
                'attr'=>[
                    'placeholder'=>'Description'
                ]
            ])
            ->add('categorie',ChoiceType::class,[
                'choices'=> array(
                    'Habits traditionnels'=>'Habits traditionnels',
                    'Décoration'=>'Décoration',
                    'Huiles essentielles'=>'Huiles essentielles',
                    'Souvenirs'=>'Souvenirs',
                )
            ])
            ->add('prix',NumberType::class,[
                'label'=>'Prix',
                'attr'=>[
                    'placeholder'=>'Prix'
                ]
            ])
            ->add('image',FileType::class,[
                'label'=>'Image Article',
                'mapped'=> false
               
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
