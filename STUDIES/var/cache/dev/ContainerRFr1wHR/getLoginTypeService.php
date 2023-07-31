<?php

namespace ContainerRFr1wHR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\LoginType' shared autowired service.
     *
     * @return \App\Form\LoginType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/LoginType.php';

        return $container->privates['App\\Form\\LoginType'] = new \App\Form\LoginType();
    }
}
