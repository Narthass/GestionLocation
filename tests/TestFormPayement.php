<?php
namespace App\Test;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestFormPayement extends WebTestCase
{
    public function testForm(): void
    {

    $client= static::createClient();
    $crawler=$client->request('GET','/display/payements/42')
}
}
