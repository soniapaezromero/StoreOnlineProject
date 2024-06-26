<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Wnzmq8PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wnzmq8P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wnzmq8P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'consultaRepository' => ['privates', 'App\\Repository\\ConsultaRepository', 'getConsultaRepositoryService', true],
        ], [
            'consultaRepository' => 'App\\Repository\\ConsultaRepository',
        ]);
    }
}
