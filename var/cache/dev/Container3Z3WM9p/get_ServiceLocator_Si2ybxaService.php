<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Si2ybxaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.si2ybxa' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.si2ybxa'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'stockRepository' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
        ], [
            'stockRepository' => 'App\\Repository\\StockRepository',
        ]);
    }
}
