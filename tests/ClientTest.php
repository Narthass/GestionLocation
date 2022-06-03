<?php

namespace App\Tests;

use App\Entity\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientTest extends WebTestCase
{
    
    /**
     * @dataProvider Provider
     
     */ 
    public function testIfCreateClientIsSuccesfull($nom,$prenom,$email,$telephone): void
    {
        $client = static::createClient();
        $urlGenerator=$client->getContainer()->get('router');
        $client->getContainer()->get('doctrine.orm.entity_manager');
        
        $crawler = $client->request(Request::METHOD_GET,$urlGenerator->generate('client_create'));
        $submitButton=$crawler->selectButton('Valider');
        $form=$submitButton->form();
            $form['nom'] = $nom;
            $form['prenom'] = $prenom;
            $form['email'] = $email ;
            $form['telephone'] = $telephone;
            $client->submit($form);
            $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
            $client->followRedirect();
            $this->assertRouteSame('app_index');

        
    }

    public function Provider(){
        return [['el','risitas','el.risitas@gmail.com','0655555555'],];
    }
}
