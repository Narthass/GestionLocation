<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\RequestStack;

class EcomToolbox{
    //Notre classe Service pour notre application Symfony eCommerce

    private $requestStack;
    private $security;
    private $manager;

    public function __construct(RequestStack $requestStack, Security $security, EntityManagerInterface $manager){
        //Nous récupérons l'instance RequestStack afin de pouvoir utiliser l'objet Request au sein de notre classe de service
        //Pour pouvoir récupérer la Request, nous utiliserons la méthode getCurrentRequest()
        $this->requestStack = $requestStack;
        //On récupère l'outil de sécurité
        $this->security = $security;
        //On récupère l'Entity Manager
        $this->manager = $manager;
    }
}