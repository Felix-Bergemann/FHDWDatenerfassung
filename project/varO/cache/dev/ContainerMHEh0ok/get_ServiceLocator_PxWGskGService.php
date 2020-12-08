<?php

namespace ContainerMHEh0ok;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PxWGskGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pxWGskG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pxWGskG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'builder' => ['services', 'mukadi_chart_js.dql', 'getMukadiChartJs_DqlService', true],
        ], [
            'builder' => '?',
        ]);
    }
}