<?php

namespace App\Form;

use App\Entity\Exercice;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ExerciceType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ##->add('image')
         ##->add('image', FileType::class)

            ->add('image', FileType::class, array('data_class' => null))
            ->add('nom')
            ->add('description')
             ->add('video', FileType::class, array('data_class' => null))
            ->add('docs', FileType::class, array('data_class' => null))

            ->add('Exercicecategorie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Exercice::class,
        ]);
    }

}
