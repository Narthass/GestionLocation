<?php

namespace Container3qKfEDg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayementControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\PayementController' shared autowired service.
     *
     * @return \App\Controller\PayementController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\PayementController'] = $instance = new \App\Controller\PayementController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\PayementController', $container));

        return $instance;
    }
}
