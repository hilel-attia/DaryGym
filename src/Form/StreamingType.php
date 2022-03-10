<?php

namespace App\Form;

use App\Entity\Streaming;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class StreamingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('room')
            ->add('name')
            ->add('audio',ChoiceType::Class,[
'choices' => [

    'active' => '1',
    'desactive' => '0'

]   ])
            ->add('video',ChoiceType::Class,[
                    'choices' => [

                      'active' => '1',
                      'desactive' => '0'
    
    ]   ])
    ->add('notify',ChoiceType::Class,[
        'choices' => [

          'active' => '1',
          'desactive' => '0'

]   ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Streaming::class,
        ]);
    }
}
