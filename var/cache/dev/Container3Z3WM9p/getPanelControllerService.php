<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPanelControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PanelController' shared autowired service.
     *
     * @return \App\Controller\PanelController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PanelController.php';

        $container->services['App\\Controller\\PanelController'] = $instance = new \App\Controller\PanelController(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\ClienteRepository'] ?? $container->load('getClienteRepositoryService')), ($container->privates['App\\Repository\\PedidoRepository'] ?? $container->load('getPedidoRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\PanelController', $container));

        return $instance;
    }
}
