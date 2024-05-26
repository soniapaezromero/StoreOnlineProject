<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PfEPqxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pf_EPqx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pf_EPqx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'novedadesRepository' => ['privates', 'App\\Repository\\NovedadesRepository', 'getNovedadesRepositoryService', true],
        ], [
            'novedadesRepository' => 'App\\Repository\\NovedadesRepository',
        ]);
    }
}
