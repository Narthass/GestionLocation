<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Contrat;
use App\Form\ContratType;
use App\Service\ServiceContrat;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
#[Security('is_granted("ROLE_BAILLEUR")')]

class ContratController extends AbstractController
{
    #[Route('/contrat/create', name: 'contrat_create')]
    public function createContrat(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $contrat = new Contrat;
        $contratForm = $this->createForm(ContratType::class, $contrat);
        $contratForm->handleRequest($request);
        $contrat->setDernierLoyer(new \Datetime('now'));
        if ($contratForm->isSubmitted() && $contratForm->isValid()) {
            $contrat->setMontantRestant($contrat->getLoyer());
            $contrat->setProchaineEcheance(clone $contrat->getDernierLoyer());
            date_add($contrat->getProchaineEcheance(), $contrat->getFrequencePayement());
            $entityManager->persist($contrat);
            $entityManager->flush(); 
            $this->addFlash(
                'success',
                'Le contrat a bien été créé !'
            );


            return $this->redirectToRoute('admin_backoffice');
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'Création du contrat',
            'dataForm' => $contratForm->createView(),
            
        ]);
    }

    #[Route('/contrat/create/{clientId}', name: 'contrat_create_for_client')]
    public function createContratForAClient(ManagerRegistry $doctrine, Request $request,int $clientId): Response
    {
        $entityManager = $doctrine->getManager();
        $contrat = new Contrat;
        $clientRepository=$doctrine->getRepository(Client::class);
        $client = $clientRepository->findOneBy(["id" => $clientId]);
        $contrat->setClient($client);
        $contrat->setDernierLoyer(new \Datetime('now'));
        $contratForm = $this->createForm(ContratType::class, $contrat);
        $contratForm->handleRequest($request);
        if ($contratForm->isSubmitted() && $contratForm->isValid()) {
            $contrat->setMontantRestant($contrat->getLoyer());
            $contrat->setProchaineEcheance(clone $contrat->getDernierLoyer());
            date_add($contrat->getProchaineEcheance(), $contrat->getFrequencePayement());
            $entityManager->persist($contrat);
            $entityManager->flush(); 
            $this->addFlash(
                'success',
                'Le contrat a bien été créé !'
            );


            return $this->redirectToRoute('contrat_display',array('clientId'=>$clientId));
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'Création du contrat',
            'dataForm' => $contratForm->createView(),
            'clientId'=>$clientId,
        ]);
    }

    #[Route('/contrat/delete/{contratId}', name: 'contrat_delete')]
    public function deleteContrat(int $contratId, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $contratRepository = $entityManager->getRepository(Contrat::class);
        $contrat = $contratRepository->findOneBy(['id' => $contratId]);
        $entityManager->remove($contrat);
        $entityManager->flush();
        return $this->redirectToRoute('admin_backoffice');
    }


    #[Route('/display/contrats/{clientId}', name: 'contrat_display')]
    public function displayContrats(int $clientId,  ServiceContrat $serviceContrat): Response
    {
       $client=$serviceContrat->displayContrat($clientId);



        return $this->render('index/contrats.html.twig', [
            'client' => $client,


        ]);
    }

    #[Route('/contrat/update/{contratId}', name: 'contrat_update')]
    public function updateContrat(int $contratId, ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();


        $contratRepository = $entityManager->getRepository(Contrat::class);
        $contrat = $contratRepository->findOneBy(["id" => $contratId]);

        $contratForm = $this->createForm(ContratType::class, $contrat);
        $contratForm->handleRequest($request);
        if ($contratForm->isSubmitted() && $contratForm->isValid()) {

            
            $contrat->setProchaineEcheance(clone $contrat->getDernierLoyer());
            date_add($contrat->getProchaineEcheance(), $contrat->getFrequencePayement());
            
            $entityManager->persist($contrat);
            $entityManager->flush();
            $this->addFlash(
                'notice',
                'Le contrat a bien été modifié!'
            );


            return $this->redirectToRoute('app_index');
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'modification du contrat',
            'dataForm' => $contratForm->createView(),
        ]);
    }
    
    #[Route('/contrat/archiver/{contratId}', name: 'contrat_archiver')]
    public function archiverContrat(int $contratId , ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();


        $contratRepository = $entityManager->getRepository(Contrat::class);
        $contrat = $contratRepository->findOneBy(["id" => $contratId]);
        $contrat->setArchivé('1');
        $entityManager->persist($contrat);
        $entityManager->flush();
        $this->addFlash(
            'notice',
            'Le contrat a bien été archivé!'
        );
        return $this->redirectToRoute('contrat_display',['clientId'=>$contrat->getClient()->getId()]);

        

    }

    
}
