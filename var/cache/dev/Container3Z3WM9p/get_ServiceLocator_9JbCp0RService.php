<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9JbCp0RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9JbCp0R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9JbCp0R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartManager' => ['privates', 'App\\Manager\\CartManager', 'getCartManagerService', true],
            'producto' => ['privates', '.errored..service_locator.9JbCp0R.App\\Entity\\Producto', NULL, 'Cannot autowire service ".service_locator.9JbCp0R": it references class "App\\Entity\\Producto" but no such service exists.'],
        ], [
            'cartManager' => 'App\\Manager\\CartManager',
            'producto' => 'App\\Entity\\Producto',
        ]);
    }
}
