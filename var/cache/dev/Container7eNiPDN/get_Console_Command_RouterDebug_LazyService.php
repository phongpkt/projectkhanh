<?php

namespace Container7eNiPDN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_RouterDebug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.router_debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.console.command.router_debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:router', [], 'Display current routes for an application', false, function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand {
            return ($container->privates['console.command.router_debug'] ?? $container->load('getConsole_Command_RouterDebugService'));
        });
    }
}
