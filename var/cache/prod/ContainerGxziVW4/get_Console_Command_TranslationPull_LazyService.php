<?php

namespace ContainerGxziVW4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_TranslationPull_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.console.command.translation_pull.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.console.command.translation_pull.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('translation:pull', [], 'Pull translations from a given provider.', false, #[\Closure(name: 'console.command.translation_pull', class: 'Symfony\\Component\\Translation\\Command\\TranslationPullCommand')] function () use ($container): \Symfony\Component\Translation\Command\TranslationPullCommand {
            return ($container->privates['console.command.translation_pull'] ?? $container->load('getConsole_Command_TranslationPullService'));
        });
    }
}
