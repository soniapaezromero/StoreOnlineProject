<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QkEqAf2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qkEqAf2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qkEqAf2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'estadoRepository' => ['privates', 'App\\Repository\\EstadoRepository', 'getEstadoRepositoryService', true],
            'orderFactory' => ['privates', 'App\\Factory\\OrderFactory', 'getOrderFactoryService', true],
            'orderItemRepository' => ['privates', 'App\\Repository\\OrderItemRepository', 'getOrderItemRepositoryService', true],
            'orderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'pedido' => ['privates', '.errored..service_locator.qkEqAf2.App\\Entity\\Pedido', NULL, 'Cannot autowire service ".service_locator.qkEqAf2": it references class "App\\Entity\\Pedido" but no such service exists.'],
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
            'stockRepository' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
        ], [
            'entityManager' => '?',
            'estadoRepository' => 'App\\Repository\\EstadoRepository',
            'orderFactory' => 'App\\Factory\\OrderFactory',
            'orderItemRepository' => 'App\\Repository\\OrderItemRepository',
            'orderRepository' => 'App\\Repository\\OrderRepository',
            'pedido' => 'App\\Entity\\Pedido',
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
            'stockRepository' => 'App\\Repository\\StockRepository',
        ]);
    }
}