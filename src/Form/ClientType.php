<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'label' =>'Nom du client',
                'attr' => [
                    'class' => 'w3-input w3-border w3-round w3-light-grey',
                ],
            ])
            ->add('prenom',TextType::class,[
                'label' =>'Prenom du client',
                'attr' => [
                    'class' => 'w3-input w3-border w3-round w3-light-grey',
                ],
            ])
            ->add('email',EmailType::class,[
                'label' =>'Adresse mail du client',
                'attr' => [
                    'class' => 'w3-input w3-border w3-round w3-light-grey',
                ],
            ])
            ->add('telephone',TelType::class,[
                'label' =>'Numero de telephone du client',
                'attr' => [
                    'class' => 'w3-input w3-border w3-round w3-light-grey',
                    
                ],
                'constraints' =>[
                    new Regex('/^((\+[0-9]{2})|0)[0-9]{9}$/'),

                    
                ]
            ])
            ->add('User', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username',

                'attr' => [
                    'class' => 'w3-input w3-border w3-round w3-light-grey',
                ]

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
            'data_class' => Client::class,
        ]);
    }
}
