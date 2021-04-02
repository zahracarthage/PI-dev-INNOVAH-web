<?php

namespace App\Form;

use App\Entity\Maisonhote;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class MaisonhoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('adresse')
            ->add('num')
            ->add('prix')
            ->add('note')
            ->add('image',FileType::class, array('data_class' => null,'required' => false))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Maisonhote::class,
        ]);
    }
}
