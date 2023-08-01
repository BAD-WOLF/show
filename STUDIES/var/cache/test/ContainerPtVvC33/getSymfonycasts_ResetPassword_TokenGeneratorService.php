<?php

namespace ContainerPtVvC33;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSymfonycasts_ResetPassword_TokenGeneratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'symfonycasts.reset_password.token_generator' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Generator/ResetPasswordTokenGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Generator/ResetPasswordRandomGenerator.php';

        return $container->privates['symfonycasts.reset_password.token_generator'] = new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordTokenGenerator($container->getEnv('APP_SECRET'), ($container->privates['symfonycasts.reset_password.random_generator'] ??= new \SymfonyCasts\Bundle\ResetPassword\Generator\ResetPasswordRandomGenerator()));
    }
}