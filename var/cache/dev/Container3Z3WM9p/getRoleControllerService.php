<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRoleControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Role\RoleController' shared autowired service.
     *
     * @return \App\Controller\Role\RoleController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Role'.\DIRECTORY_SEPARATOR.'RoleController.php';

        $container->services['App\\Controller\\Role\\RoleController'] = $instance = new \App\Controller\Role\RoleController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Role\\RoleController', $container));

        return $instance;
    }
}
