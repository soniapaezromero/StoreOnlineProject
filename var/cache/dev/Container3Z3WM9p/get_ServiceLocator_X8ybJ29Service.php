<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_X8ybJ29Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.x8ybJ29' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.x8ybJ29'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cliente' => ['privates', '.errored..service_locator.x8ybJ29.App\\Entity\\Cliente', NULL, 'Cannot autowire service ".service_locator.x8ybJ29": it references class "App\\Entity\\Cliente" but no such service exists.'],
            'clienteRepository' => ['privates', 'App\\Repository\\ClienteRepository', 'getClienteRepositoryService', true],
        ], [
            'cliente' => 'App\\Entity\\Cliente',
            'clienteRepository' => 'App\\Repository\\ClienteRepository',
        ]);
    }
}
