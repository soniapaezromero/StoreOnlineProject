<?php

namespace ContainerHvGneYY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WNlvOqmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WNlvOqm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WNlvOqm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'producto' => ['privates', '.errored..service_locator.WNlvOqm.App\\Entity\\Producto', NULL, 'Cannot autowire service ".service_locator.WNlvOqm": it references class "App\\Entity\\Producto" but no such service exists.'],
        ], [
            'producto' => 'App\\Entity\\Producto',
        ]);
    }
}
