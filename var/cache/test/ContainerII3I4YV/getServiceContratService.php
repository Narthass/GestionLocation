<?php

namespace ContainerII3I4YV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceContratService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\ServiceContrat' shared autowired service.
     *
     * @return \App\Service\ServiceContrat
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ServiceContrat.php';

        return $container->privates['App\\Service\\ServiceContrat'] = new \App\Service\ServiceContrat(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
