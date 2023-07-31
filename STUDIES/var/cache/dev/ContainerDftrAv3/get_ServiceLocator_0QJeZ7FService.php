<?php

namespace ContainerDftrAv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0QJeZ7FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0QJeZ7F' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0QJeZ7F'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'produto' => ['privates', '.errored..service_locator.0QJeZ7F.App\\Entity\\Produto', NULL, 'Cannot autowire service ".service_locator.0QJeZ7F": it needs an instance of "App\\Entity\\Produto" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'produto' => 'App\\Entity\\Produto',
        ]);
    }
}
