<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BnXkSLyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BnXkSLy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BnXkSLy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartManager' => ['privates', 'App\\Manager\\CartManager', 'getCartManagerService', true],
            'orderFactory' => ['privates', 'App\\Factory\\OrderFactory', 'getOrderFactoryService', true],
        ], [
            'cartManager' => 'App\\Manager\\CartManager',
            'orderFactory' => 'App\\Factory\\OrderFactory',
        ]);
    }
}
