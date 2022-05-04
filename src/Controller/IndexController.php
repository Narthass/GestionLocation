<?php

namespace App\Controller;


use App\Entity\Client;
use DateTimeInterface;
use App\Entity\Contrat;
use App\Entity\Payement;
use App\Form\ClientType;
use App\Form\ContratType;
use App\Form\PayementType;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $clients = $clientRepository->findAll();
        $contratRepository = $entityManager->getRepository(Contrat::class);
        $contrats = $contratRepository->findAll();
        $alerter = null;
        foreach ($contrats as $contrat) {
            $actuel = new \DateTime('now');
            $pEcheance = $contrat->getProchaineEcheance();
            
            $frequence=$contrat->getFrequencePayement();
            
            

            if (date_format($pEcheance, 'd-m-Y') == $actuel->format('d-m-Y') && $contrat->getSituationPayement()=='non' ) 
            {
               if(is_null($alerter)==true){
                   $alerter=[];
               }
                $alerter[]= $contrat;
            }
            if ($actuel->format('d-m-Y') > date_format($pEcheance,'d-m-Y') )
            {
                date_add($pEcheance,$frequence);

                $entityManager->persist($contrat);
                $entityManager->flush();
                


            }

        }
        
        


        return $this->render('index/index.html.twig', [
            'clients' => $clients,
            'alerter'=>$alerter,

        ]);
    }


    #[Route('/client/create', name: 'client_create')]
    public function createClient(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $client = new Client;
        $clientForm = $this->createForm(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {

            $entityManager->persist($client);
            $entityManager->flush();


            return $this->redirectToRoute('app_index');
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'Création du client',
            'dataForm' => $clientForm->createView(),
        ]);
    }

    #[Route('client/delete/{clientId}', name: 'client_delete')]
    public function deleteClient(int $clientId, ManagerRegistry $doctrine)
    {
        $entityManager = $doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $client = $clientRepository->find($clientId);
        if (!$client) {
            return $this->redirectToRoute('app_index');
        }
        $entityManager->remove($client);
        $entityManager->flush();
        return $this->redirectToRoute('app_index');
    }

    #[Route('client/update/{clientId}', name: 'client_update')]
    public function updateClient(int $clientId, ManagerRegistry $doctrine, Request $request)
    {
        $entityManager = $doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $client = $clientRepository->find($clientId);
        if (!$client) {
            return $this->redirectToRoute('app_index');
        }

        $clientForm = $this->createForm(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            //Prix minimum de 1€ pour effectuer la persistance
            $entityManager->persist($client);
            $entityManager->flush();

            //Nous retournons au backoffice Administrateur
            return $this->redirectToRoute('app_index');
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'modification du client',
            'dataForm' => $clientForm->createView(),
        ]);
    }


    #[Route('/contrat/create', name: 'contrat_create')]
    public function createContrat(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $contrat = new Contrat;
        $contratForm = $this->createForm(ContratType::class, $contrat);
        $contratForm->handleRequest($request);
        if ($contratForm->isSubmitted() && $contratForm->isValid()) {
            $contrat->setMontantRestant($contrat->getLoyer());
            $contrat->setProchaineEcheance(clone $contrat->getDernierLoyer());
            date_add($contrat->getProchaineEcheance(), $contrat->getFrequencePayement());
            $entityManager->persist($contrat);
            $entityManager->flush();


            return $this->redirectToRoute('app_index');
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'Création du contrat',
            'dataForm' => $contratForm->createView(),
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
        return $this->redirectToRoute('app_index');
    }


    #[Route('/display/contrats/{clientId}', name: 'contrat_display')]
    public function displayContrats(int $clientId, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $client = $clientRepository->find($clientId);



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
            $contrat->setMontantRestant();
            $entityManager->persist($contrat);
            $entityManager->flush();


            return $this->redirectToRoute('app_index');
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'modification du contrat',
            'dataForm' => $contratForm->createView(),
        ]);
    }

    #[Route('/display/payements/{contratId}', name: 'payements_display')]
    public function displayPayements(LoggerInterface $logger,int $contratId, ManagerRegistry $doctrine,Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $payementRepository = $entityManager->getRepository(Payement::class);
        $payements = $payementRepository->findBy(['contrat' => $contratId]);
        $contratRepository=$entityManager->getRepository(Contrat::class);
        $contrat=$contratRepository->findOneBy(['id'=>$contratId]);
        $reglement= ['reglement'=>0];
        
        $form = $this->createFormBuilder($reglement)
            
        ->add('reglement', NumberType::class)
            
            
            ->getForm();

            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {


                $data=$request->request->get('reglement');
                $avant=$contrat->getMontantRestant();
                $contrat->setMontantRestant($avant + $data);
                
                $entityManager->persist($contrat);
                $entityManager->flush();
    
                return $this->redirectToRoute('payements_display',['contratId'=>$contratId]);
            }

            

        return $this->render('index/payements.html.twig', [
            'payements' => $payements,
            'contrat'=>$contrat,
            'form'=>$form->createView(),
            
            


        ]);
    }

    #[Route('/payement/create/{contratId}', name: 'payement_create')]
    public function createPayement(int $contratId ,ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $payement = new Payement;
        $payementForm = $this->createForm(PayementType::class, $payement);
        $payementForm->handleRequest($request);
       
        
        
        if ($payementForm->isSubmitted() && $payementForm->isValid()) {
            $contratRepository=$entityManager->getRepository(Contrat::class);
            $contrat=$contratRepository->findOneBy(['id'=>$contratId]);
            
            
            
            $payement->setContrat($contrat);
          
            $entityManager->persist($payement);
            $entityManager->flush();


            return $this->redirectToRoute('payements_display',['contratId'=>$contratId]);
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'Archivage du payement',
            'dataForm' => $payementForm->createView(),
            
        ]);
    }

    //Cette route sert à voir quels sont les contrat bientot arrivés à échéance

}
