<?php

namespace ContainerHM0D7ZY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservationrepasTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ReservationrepasType' shared autowired service.
     *
     * @return \App\Form\ReservationrepasType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ReservationrepasType.php';

        return $container->privates['App\\Form\\ReservationrepasType'] = new \App\Form\ReservationrepasType();
    }
}
