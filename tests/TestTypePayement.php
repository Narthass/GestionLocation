<?php

namespace App\Tests;

use App\Entity\Contrat;
use App\Entity\Payement;
use PHPUnit\Framework\TestCase;
use App\Controller\IndexController;
use App\Controller\PayementController;



class TestTypePayement extends TestCase

{

    /**
     * @dataProvider Provider
     
     */ 
    public function testTypePayement($type,$somme,$restant,$expected){
        $contrat = new Contrat;
        $payement= new Payement;
        $payement->setTypePayement($type);
        $contrat->setMontantRestant($restant);
        $payement->setSommePayee($somme);
        $this->assertSame($expected,PayementController::calculMontantRestant($contrat,$payement)) ;
        


    }

    public function Provider()
    {
        return [
            ['Payement',2000,1000,-1000],
            ['Payement',1000,1000,0],
            
            ['Remboursement',2000,1000,3000],
            ['Remboursment',1000,1000,2000],
            ['Remboursement',1000,-1000,0],
            
        ];
    }
}