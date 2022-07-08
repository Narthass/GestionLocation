<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Client;
use App\Entity\Contrat;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClientController extends AbstractController
{
    #[Route('/client/display/', name: 'app_client')]
    public function DisplayClients(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
    
       
        
        $clientRepository = $entityManager->getRepository(Client::class);
        $clients = $clientRepository->findAll();
        $contratRepository = $entityManager->getRepository(Contrat::class);
        $contrats = $contratRepository->findBy(['archivé'=>'0']);
        $alerter = null;
        foreach ($contrats as $contrat) {
            $actuel = new \DateTime('now');
            $pEcheance = $contrat->getProchaineEcheance();

            $frequence = $contrat->getFrequencePayement();



            if (date_format($pEcheance, 'd-m-Y') == $actuel->format('d-m-Y') && $contrat->getMontantRestant() > 0) {
                if (is_null($alerter) == true) {
                    $alerter = [];
                }
                $alerter[] = $contrat;
            }
            if ($actuel->format('d-m-Y') > date_format($pEcheance, 'd-m-Y')) {
                date_add($pEcheance, $frequence);

                $entityManager->persist($contrat);
                $entityManager->flush();
            }
        }
        




        return $this->render('index/clients.html.twig', [
            'clients' => $clients,
            'alerter' => $alerter,

        ]);
}
}