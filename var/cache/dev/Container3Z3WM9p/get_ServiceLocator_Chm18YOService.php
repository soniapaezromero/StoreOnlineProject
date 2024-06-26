<?php

namespace Container3Z3WM9p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Chm18YOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.chm18YO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.chm18YO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoria' => ['privates', '.errored..service_locator.chm18YO.App\\Entity\\Categoria', NULL, 'Cannot autowire service ".service_locator.chm18YO": it references class "App\\Entity\\Categoria" but no such service exists.'],
            'categoriaRepository' => ['privates', 'App\\Repository\\CategoriaRepository', 'getCategoriaRepositoryService', true],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
        ], [
            'categoria' => 'App\\Entity\\Categoria',
            'categoriaRepository' => 'App\\Repository\\CategoriaRepository',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
        ]);
    }
}
