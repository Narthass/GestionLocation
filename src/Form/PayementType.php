<?php

namespace App\Form;

use App\Entity\Payement;

use App\Config\EnumPayement;
use App\Config\EnumTypePayement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PayementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('SommePayee', NumberType::class,)
            ->add('TypePayement',EntityType::class,[
                'class' =>EnumTypePayement::class,
                'label'=>'Quel type de payement est-ce?',
                'expanded'=>true,
                'multiple'=>false,
            
                

            ])
            
            
            ->add('date', DateType::class,[
                
                'format'=> 'dd-MM-yyyy',
                'data_class' =>null,
                
                
                'data' => new \Datetime('now'),
                
                
                
            ])
            ->add(
                'MoyenPayement',
                ChoiceType::class,
                [
                    'choices' => [
                        'CB'=>'CB',
                        'cheque'=>'cheque',
                        'liquide'=>'liquide',
                    ],
                    
                ]
            )
            
            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'w3-button w3-black w3-margin-bottom',
                    'style' => 'margin-top: 10px',
                ]
                ]);

                
              
    
    
    
            }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Payement::class,
        ]);
    }
}
