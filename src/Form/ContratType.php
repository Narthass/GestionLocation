<?php

namespace App\Form;



use DateTime;

use App\Entity\Client;
use App\Entity\Contrat;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('surface', TextareaType::class, [
                'label' => 'Description de la parcelle louée',
                'attr' => [
                    'class' => 'form-control border border-info',
                ]
            ])
            ->add('FrequencePayement', DateIntervalType::class, [
                'label' => 'Quelle est la fréquence du règlement?',
                'input'=>'dateinterval',
                'labels'=>[
                    'years'=>'Années',
                    'months'=>'Mois',
                    'days'=>'Jours',

                ],
                
                'attr' => [
                    'class' => 'form-control border border-info',
                ]
            ])
            


            ->add('loyer',NumberType::class,[
                'label'=>'Quel est le montant du loyer ?',
                'attr' => [
                    'class' => 'form-control border border-info',
                ]

                
            ])
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => 'nom',

                'attr' => [
                    'class' =>'form-control border border-info',
                ]

            ])

            ->add('DernierLoyer',DateType::class,[
                'label' => 'A quelle date commence le contrat?',
                'format'=> 'dd-MM-yyyy',
                'data_class' =>null,
                
                
                
                
                
                
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'btn  btn-info text-success',
                    'style' => 'margin-top: 10px',
                ]
            ])
            
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contrat::class,
        ]);
    }
}
