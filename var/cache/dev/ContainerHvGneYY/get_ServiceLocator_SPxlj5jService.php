<?php

namespace ContainerHvGneYY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SPxlj5jService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sPxlj5j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sPxlj5j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorium' => ['privates', '.errored..service_locator.sPxlj5j.App\\Entity\\Categoria', NULL, 'Cannot autowire service ".service_locator.sPxlj5j": it references class "App\\Entity\\Categoria" but no such service exists.'],
        ], [
            'categorium' => 'App\\Entity\\Categoria',
        ]);
    }
}
