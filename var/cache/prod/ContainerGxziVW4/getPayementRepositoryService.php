<?php

namespace ContainerGxziVW4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPayementRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\PayementRepository' shared autowired service.
     *
     * @return \App\Repository\PayementRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\PayementRepository'] = new \App\Repository\PayementRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
