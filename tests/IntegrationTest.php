<?php
namespace App\Tests;


use App\Entity\Payement;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class IntegrationTest extends KernelTestCase
{
     /**
     * @dataProvider Provider
     
     */ 
    public function testSomething($somme,$date,$moyen,$type)
    {
        // (1) boot the Symfony kernel
        self::bootKernel();

        // (2) use static::getContainer() to access the service container
        $container = static::getContainer();
        $payement= new Payement;
        $payement ->setSommePayee($somme)
                  ->setDate($date)
                  ->setMoyenPayement($moyen)
                  ->setTypePayement($type);
                  
        $errors =$container->get('validator') ->validate($payement);

        $this->assertCount(0, $errors);          

    }

    public function Provider() {
        return [
            [-3000,new \Datetime('30-05-2022'),'cheque','Remboursement'],
            [-3000,new \Datetime('30-05-2022'),'cheque','issou'],
            [-5000,'coucou','cheque','Payement'],
        
        
        ];



    }
}