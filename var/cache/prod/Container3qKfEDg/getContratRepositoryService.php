<?php

namespace Container3qKfEDg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContratRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ContratRepository' shared autowired service.
     *
     * @return \App\Repository\ContratRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ContratRepository'] = new \App\Repository\ContratRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
