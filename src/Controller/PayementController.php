<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Entity\Payement;
use App\Form\PayementType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PayementController extends AbstractController
{
    #[Route('/display/payements/{contratId}', name: 'payements_display')]
    public function displayPayements(int $contratId, ManagerRegistry $doctrine, Request $request,): Response
    {
        $entityManager = $doctrine->getManager();
        $payementRepository = $entityManager->getRepository(Payement::class);
        $payements = $payementRepository->findBy(['contrat' => $contratId]);
        $contratRepository = $entityManager->getRepository(Contrat::class);
        $contrat = $contratRepository->findOneBy(['id' => $contratId]);

        $payement = new Payement;
        $payement->setContrat($contrat);
        $payementForm = $this->createForm(PayementType::class, $payement);


        $payementForm->handleRequest($request);



        if ($payementForm->isSubmitted() && $payementForm->isValid()) {


            $data = $payement->getSommePayee();


            $avant = $contrat->getMontantRestant();
            if($payement->getTypePayement()=='Payement'){
                $contrat->setMontantRestant($avant - $data);
            }
            else {
                $contrat->setMontantRestant($avant + $data);

            }


            if ($contrat->getMontantRestant() < 1) {
                $contrat->setSituationPayement('oui');
            }



            $entityManager->persist($payement);
            $entityManager->flush();
            return $this->redirect($request->getUri());
        }



        return $this->render('index/payements.html.twig', [
            'payements' => $payements,
            'contrat' => $contrat,


            'form' => $payementForm->createView(),
        ]);
    }


    public static function nouvelleBalanceApresPaiement(Contrat $contrat, Payement $payement): int
    {
        return $contrat->getMontantRestant() - $payement->getSommePayee();
    }
    public static function nouvelleBalanceApresRemboursement(Contrat $contrat, Payement $payement): int
    {
        return $contrat->getMontantRestant() + $payement->getSommePayee();
    }
    public static function calculMontantRestant(Contrat $contrat,Payement $payement): int
    {
        $data = $payement->getSommePayee();

        $avant = $contrat->getMontantRestant();
        if($payement->getTypePayement()=='Payement'){
           return ($avant - $data);
    
        }
        else {
           return ($avant + $data);

        }
    }

    public static function majMontantRestant(Contrat $contrat, Payement $payement): int {
        $nouveauMontant = calculMontantRestant($contrat, $payement);
        $contrat->setMontantRestant($nouveauMontant);
        return $nouveauMontant;
    }


    #[Route('/payement/create/{contratId}', name: 'payement_create',)]
    public function createPayement(int $contratId, ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $payement = new Payement;
        $payementForm = $this->createForm(PayementType::class, $payement);
        $payementForm->handleRequest($request);



        if ($payementForm->isSubmitted() && $payementForm->isValid()) {
            $contratRepository = $entityManager->getRepository(Contrat::class);
            $contrat = $contratRepository->findOneBy(['id' => $contratId]);
            



            $payement->setContrat($contrat);

            $entityManager->persist($payement);
            $entityManager->flush();


            return $this->redirectToRoute('payements_display', ['contratId' => $contratId]);
        }
        return $this->render('index/dataform.html.twig', [

            'formName' => 'Archivage du payement',
            'dataForm' => $payementForm->createView(),

        ]);
    }
}
