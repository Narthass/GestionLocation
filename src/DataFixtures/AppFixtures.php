<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $clientArray =[
           ["nom" => "Zemmour",
           "prenom" => "Eric",
           "email" => "remi@gmail.com",
           "telephone" => 0666666666,
           "contrat" => rand(1, 300),
            ],

            ["nom" => "Melenchon",
           "prenom" => "Jean-Luc",
           "email" => "creo@gmail.com",
           "telephone" => 0677777777,
           "contrat" => rand(1, 300),
            ],

            ["nom" => "Arthaud",
           "prenom" => "Nathalie",
           "email" => "proletariat@gmail.com",
           "telephone" => 21213,
           "contrat" => rand(1, 300),
            ],

            ["nom"=> "Lepen",
           "prenom" =>"Marine",
           "email"=>"bleue@gmail.com",
           "telephone"=> 0644444444,
           "contrat"=>rand(1, 300),
            ],

            ["nom"=>"Macron",
           "prenom"=>"Emmanuel",
           "email"=>"neoliberal@gmail.com",
           "telephone"=> 0655555555,
           "contrat"=>rand(1, 300),
            ],
    
    
    
    
        ];

        foreach($clientArray as $clientData){
            //ProductData car chaque entrée (tableau associatif) contient les informations (data) avec lesquelles nous allons renseigner chacun de nos Products à instancier
            //Nous créons un nouveau Product:
            $client = new Client;
            //Nous renseignons notre Product avec les informations de $productData
            $client->setNom($clientData['nom']);
            $client->setPrenom($clientData['prenom']);
            $client->setEmail($clientData['email']);
            $client->setTelephone($clientData['telephone']);
            $client->setContrat($clientData['contrat']); //Nous récupérons l'objet de $categoryArray tenu par la clef dont le nom est fourni par la valeur 'category' de $productData
            //Une fois que nos attributs sont renseignés, nous persistons notre $product
            $manager->persist($client);
        }

        




        $manager->flush();
    }
}
