<?php

namespace App\Form;

use App\Entity\Offres;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use blackknight467\StarRatingBundle\Form\RatingType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class OffresType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('image', FileType::class, array('data_class' => null))
        ->add('titre', ChoiceType::class, [
            'choices' => [
                'debutant' => 'debutant',
                'capabli' => 'capabli',
                'ajej' => 'ajej',
                'tayara' => 'tayara',
                'hbel' => 'hbel',
            ]])
            
        
                
            ->add('description')
            ->add('prix')
           
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offres::class,
        ]);
    }
 

}
