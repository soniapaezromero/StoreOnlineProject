<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JjvFI6uService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JjvFI6u' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JjvFI6u'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'pedido' => ['privates', '.errored..service_locator.JjvFI6u.App\\Entity\\Pedido', NULL, 'Cannot autowire service ".service_locator.JjvFI6u": it references class "App\\Entity\\Pedido" but no such service exists.'],
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
        ], [
            'entityManager' => '?',
            'pedido' => 'App\\Entity\\Pedido',
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
        ]);
    }
}
