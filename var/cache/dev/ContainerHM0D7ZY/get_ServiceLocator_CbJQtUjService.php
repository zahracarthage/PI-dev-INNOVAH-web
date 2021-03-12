<?php

namespace ContainerHM0D7ZY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CbJQtUjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CbJQtUj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CbJQtUj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ReclamationController::delete' => ['privates', '.service_locator.lZiGBuK', 'get_ServiceLocator_LZiGBuKService', true],
            'App\\Controller\\ReclamationController::edit' => ['privates', '.service_locator.Ky9OCSE', 'get_ServiceLocator_Ky9OCSEService', true],
            'App\\Controller\\ReclamationController::index' => ['privates', '.service_locator.z4vVS.d', 'get_ServiceLocator_Z4vVS_DService', true],
            'App\\Controller\\ReclamationController::new' => ['privates', '.service_locator.CRG1Jjd', 'get_ServiceLocator_CRG1JjdService', true],
            'App\\Controller\\RepasController::delete' => ['privates', '.service_locator.URm4Dpl', 'get_ServiceLocator_URm4DplService', true],
            'App\\Controller\\RepasController::index' => ['privates', '.service_locator.3aTd9kz', 'get_ServiceLocator_3aTd9kzService', true],
            'App\\Controller\\RepasController::index2' => ['privates', '.service_locator.3aTd9kz', 'get_ServiceLocator_3aTd9kzService', true],
            'App\\Controller\\RepasController::index3' => ['privates', '.service_locator.3aTd9kz', 'get_ServiceLocator_3aTd9kzService', true],
            'App\\Controller\\RepasController::update' => ['privates', '.service_locator.URm4Dpl', 'get_ServiceLocator_URm4DplService', true],
            'App\\Controller\\ReservationrepasController::delete' => ['privates', '.service_locator._OLySUt', 'get_ServiceLocator_OLySUtService', true],
            'App\\Controller\\ReservationrepasController::edit' => ['privates', '.service_locator._OLySUt', 'get_ServiceLocator_OLySUtService', true],
            'App\\Controller\\ReservationrepasController::index' => ['privates', '.service_locator.hVwMxny', 'get_ServiceLocator_HVwMxnyService', true],
            'App\\Controller\\ReservationrepasController::show' => ['privates', '.service_locator._OLySUt', 'get_ServiceLocator_OLySUtService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ReclamationController:delete' => ['privates', '.service_locator.lZiGBuK', 'get_ServiceLocator_LZiGBuKService', true],
            'App\\Controller\\ReclamationController:edit' => ['privates', '.service_locator.Ky9OCSE', 'get_ServiceLocator_Ky9OCSEService', true],
            'App\\Controller\\ReclamationController:index' => ['privates', '.service_locator.z4vVS.d', 'get_ServiceLocator_Z4vVS_DService', true],
            'App\\Controller\\ReclamationController:new' => ['privates', '.service_locator.CRG1Jjd', 'get_ServiceLocator_CRG1JjdService', true],
            'App\\Controller\\RepasController:delete' => ['privates', '.service_locator.URm4Dpl', 'get_ServiceLocator_URm4DplService', true],
            'App\\Controller\\RepasController:index' => ['privates', '.service_locator.3aTd9kz', 'get_ServiceLocator_3aTd9kzService', true],
            'App\\Controller\\RepasController:index2' => ['privates', '.service_locator.3aTd9kz', 'get_ServiceLocator_3aTd9kzService', true],
            'App\\Controller\\RepasController:index3' => ['privates', '.service_locator.3aTd9kz', 'get_ServiceLocator_3aTd9kzService', true],
            'App\\Controller\\RepasController:update' => ['privates', '.service_locator.URm4Dpl', 'get_ServiceLocator_URm4DplService', true],
            'App\\Controller\\ReservationrepasController:delete' => ['privates', '.service_locator._OLySUt', 'get_ServiceLocator_OLySUtService', true],
            'App\\Controller\\ReservationrepasController:edit' => ['privates', '.service_locator._OLySUt', 'get_ServiceLocator_OLySUtService', true],
            'App\\Controller\\ReservationrepasController:index' => ['privates', '.service_locator.hVwMxny', 'get_ServiceLocator_HVwMxnyService', true],
            'App\\Controller\\ReservationrepasController:show' => ['privates', '.service_locator._OLySUt', 'get_ServiceLocator_OLySUtService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ReclamationController::delete' => '?',
            'App\\Controller\\ReclamationController::edit' => '?',
            'App\\Controller\\ReclamationController::index' => '?',
            'App\\Controller\\ReclamationController::new' => '?',
            'App\\Controller\\RepasController::delete' => '?',
            'App\\Controller\\RepasController::index' => '?',
            'App\\Controller\\RepasController::index2' => '?',
            'App\\Controller\\RepasController::index3' => '?',
            'App\\Controller\\RepasController::update' => '?',
            'App\\Controller\\ReservationrepasController::delete' => '?',
            'App\\Controller\\ReservationrepasController::edit' => '?',
            'App\\Controller\\ReservationrepasController::index' => '?',
            'App\\Controller\\ReservationrepasController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ReclamationController:delete' => '?',
            'App\\Controller\\ReclamationController:edit' => '?',
            'App\\Controller\\ReclamationController:index' => '?',
            'App\\Controller\\ReclamationController:new' => '?',
            'App\\Controller\\RepasController:delete' => '?',
            'App\\Controller\\RepasController:index' => '?',
            'App\\Controller\\RepasController:index2' => '?',
            'App\\Controller\\RepasController:index3' => '?',
            'App\\Controller\\RepasController:update' => '?',
            'App\\Controller\\ReservationrepasController:delete' => '?',
            'App\\Controller\\ReservationrepasController:edit' => '?',
            'App\\Controller\\ReservationrepasController:index' => '?',
            'App\\Controller\\ReservationrepasController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
