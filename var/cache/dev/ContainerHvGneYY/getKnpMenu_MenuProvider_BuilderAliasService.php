<?php

namespace ContainerHvGneYY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_MenuProvider_BuilderAliasService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'knp_menu.menu_provider.builder_alias' shared service.
     *
     * @return \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'BuilderAliasProvider.php';

        return $container->privates['knp_menu.menu_provider.builder_alias'] = new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider(($container->services['kernel'] ?? $container->get('kernel', 1)), $container, ($container->services['knp_menu.factory'] ?? $container->load('getKnpMenu_FactoryService')));
    }
}