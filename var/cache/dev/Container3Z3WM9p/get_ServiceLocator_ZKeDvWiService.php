<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZKeDvWiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZKeDvWi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZKeDvWi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'producto' => ['privates', '.errored..service_locator.ZKeDvWi.App\\Entity\\Producto', NULL, 'Cannot autowire service ".service_locator.ZKeDvWi": it references class "App\\Entity\\Producto" but no such service exists.'],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'producto' => 'App\\Entity\\Producto',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
            'slugger' => '?',
        ]);
    }
}
