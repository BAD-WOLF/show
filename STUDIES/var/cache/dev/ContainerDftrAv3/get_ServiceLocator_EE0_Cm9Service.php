<?php

namespace ContainerDftrAv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EE0_Cm9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EE0.cm9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EE0.cm9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'mailer' => '?',
            'translator' => '?',
        ]);
    }
}
