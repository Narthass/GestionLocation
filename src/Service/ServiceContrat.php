<?php
namespace App\Service;

use App\Entity\Client;
use App\Entity\Contrat;
use App\Form\ContratType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

class ServiceContrat{
    
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;

    }
    
    public function displayContrat(int $clientId): Client
    {
        $entityManager =$this->doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $client = $clientRepository->find($clientId);
        return $client;
    }

    
    public function deleteContrat(int $clientId): Client
    {
        $entityManager =$this->doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $client = $clientRepository->find($clientId);
        return $client;
    }





}