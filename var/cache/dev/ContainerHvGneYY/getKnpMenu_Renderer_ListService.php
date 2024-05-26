<?php

namespace ContainerHvGneYY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpMenu_Renderer_ListService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'knp_menu.renderer.list' shared service.
     *
     * @return \Knp\Menu\Renderer\ListRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'Renderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'RendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-menu'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Menu'.\DIRECTORY_SEPARATOR.'Renderer'.\DIRECTORY_SEPARATOR.'ListRenderer.php';

        return $container->privates['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(($container->services['knp_menu.matcher'] ?? $container->getKnpMenu_MatcherService()), [], 'UTF-8');
    }
}
