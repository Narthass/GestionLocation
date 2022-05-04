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
                    'class' => 'w3-input w3-border w3-round w3-light-grey',
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
                    'class' => 'w3-input w3-border w3-round w3-light-grey',
                ]
            ])
            


            ->add('loyer',NumberType::class,[
                'label'=>'Quel est le montant du loyer ?',
                
            ])
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => 'nom',

                'attr' => [
                    'class' => 'w3-input w3-border w3-round w3-light-grey',
                ]

            ])

            ->add('DernierLoyer',DateType::class,[
                'label' => 'A quelle date était la dernière échéance?',
                'format'=> 'dd-MM-yyyy',
                
                
                
            ])

            ->add('submit', SubmitType::class, [
                'label' => 'Valider',
                'attr' => [
                    'class' => 'w3-button w3-black w3-margin-bottom',
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
