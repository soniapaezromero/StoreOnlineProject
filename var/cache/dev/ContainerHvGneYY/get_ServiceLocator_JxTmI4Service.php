<?php

namespace ContainerHvGneYY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JxTmI4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jx_tmI4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jx_tmI4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'stockRepository' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
        ], [
            'productoRepository' => 'App\\Repository\\ProductoRepository',
            'slugger' => '?',
            'stockRepository' => 'App\\Repository\\StockRepository',
        ]);
    }
}
