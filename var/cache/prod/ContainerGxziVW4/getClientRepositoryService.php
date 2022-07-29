<?php

namespace ContainerGxziVW4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClientRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ClientRepository' shared autowired service.
     *
     * @return \App\Repository\ClientRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ClientRepository'] = new \App\Repository\ClientRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
