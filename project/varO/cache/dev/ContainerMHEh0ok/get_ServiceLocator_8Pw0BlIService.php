<?php

namespace ContainerMHEh0ok;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8Pw0BlIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8Pw0BlI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8Pw0BlI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\MainController::chart' => ['privates', '.service_locator.pxWGskG', 'get_ServiceLocator_PxWGskGService', true],
            'App\\Controller\\MainController::loginAction' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\MainController::startAction' => ['privates', '.service_locator.Zr7T4Dl', 'get_ServiceLocator_Zr7T4DlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\MainController:chart' => ['privates', '.service_locator.pxWGskG', 'get_ServiceLocator_PxWGskGService', true],
            'App\\Controller\\MainController:loginAction' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\MainController:startAction' => ['privates', '.service_locator.Zr7T4Dl', 'get_ServiceLocator_Zr7T4DlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\MainController::chart' => '?',
            'App\\Controller\\MainController::loginAction' => '?',
            'App\\Controller\\MainController::startAction' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\MainController:chart' => '?',
            'App\\Controller\\MainController:loginAction' => '?',
            'App\\Controller\\MainController:startAction' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
