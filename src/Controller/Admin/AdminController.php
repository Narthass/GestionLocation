<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use App\Entity\Contrat;
use App\Form\ClientType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

#[Security('is_granted("ROLE_ADMIN")')]
#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'admin_backoffice')]
    public function index(ManagerRegistry $doctrine): Response
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
            $this->addFlash(
                'success',
                'Le client a bien été créé !'
            );


            return $this->redirectToRoute('admin_backoffice');
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
            return $this->redirectToRoute('admin_backoffice');
        }
        $entityManager->remove($client);
        $entityManager->flush();
        return $this->redirectToRoute('admin_backoffice');
    }

    #[Route('client/update/{clientId}', name: 'client_update')]
    public function updateClient(int $clientId, ManagerRegistry $doctrine, Request $request)
    {
        $entityManager = $doctrine->getManager();
        $clientRepository = $entityManager->getRepository(Client::class);
        $client = $clientRepository->find($clientId);
        if (!$client) {
            return $this->redirectToRoute('admin_backoffice');
        }

        $clientForm = $this->createForm(ClientType::class, $client);
        $clientForm->handleRequest($request);
        if ($clientForm->isSubmitted() && $clientForm->isValid()) {
            //Prix minimum de 1€ pour effectuer la persistance
            
            $entityManager->persist($client);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Les informations du client ont bien été mise à jour !'
            );

            //Nous retournons au backoffice Administrateur
            return $this->redirectToRoute('admin_backoffice');
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'modification du client',
            'dataForm' => $clientForm->createView(),
        ]);
    }






    #[Route('/email', name: 'mail',)]
    public function sendEmail(ManagerRegistry $doctrine, MailerInterface $mailer): Response
    {
        $entityManager = $doctrine->getManager();
        $contratRepository = $entityManager->getRepository(Contrat::class);
        $contrats = $contratRepository->findBy(['archivé'=>'0']);
        $alerter = null;
        foreach ($contrats as $contrat) {
            $actuel = new \DateTime('now');
            $pEcheance = $contrat->getProchaineEcheance();





            if (date_format($pEcheance, 'd-m-Y') == $actuel->format('d-m-Y')) {
                if (is_null($alerter) == true) {
                    $alerter = [];
                }
                $alerter[] = $contrat;
            }

            /* Changement d'échéance*/
            if (date_format($pEcheance, 'd-m-Y') < $actuel->format('d-m-Y')) {
                $contrat->setProchaineEcheance(clone $contrat->getProchaineEcheance());
                date_add($contrat->getProchaineEcheance(), $contrat->getFrequencePayement());
                $contrat->setMontantRestant($contrat->getMontantRestant() + $contrat->getLoyer());
                $entityManager->persist($contrat);
                $entityManager->flush();
            }
        }
        if (is_null($alerter) == false) {

            $email = (new TemplatedEmail())
                ->from('admin@symrecipe.com')
                ->to('admin@symrecipe.com')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Time for Symfony Mailer!')
                ->htmlTemplate('emails/alerte.html.twig')

                ->context([
                    'alerte' => $alerter,

                ]);

            $mailer->send($email);
        }
        return $this->redirectToRoute('app_index');

        // ...


        //Cette route sert à voir quels sont les contrat bientot arrivés à échéance

    }
}
