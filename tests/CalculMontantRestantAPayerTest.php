<?php

namespace App\Tests;

use App\Entity\Contrat;
use App\Entity\Payement;
use PHPUnit\Framework\TestCase;
use App\Controller\IndexController;

class CalculMontantRestantAPayerTest extends TestCase
{
  
    /**
     * @dataProvider Provider
     
     */ 
    public function testNegatif($somme,$restant,$expected)
    {
        $contrat = new Contrat;
        $payement= new Payement;
        
        
        $payement->setSommePayee($somme);
        
        $contrat->setMontantRestant($restant);
        $this->assertSame($expected,IndexController::nouvelleBalanceApresPaiement($contrat,$payement)) ;
    }

    public function Provider()
    {
        return [
            [2000,1000,-1000],
            [1000,1000,0],
            [2000,-1000,-3000],
            [-1000,-1000,0],
            [-1000,1000]
        ];
    }





}
