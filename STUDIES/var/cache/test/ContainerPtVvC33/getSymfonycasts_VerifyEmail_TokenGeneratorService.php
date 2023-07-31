<?php

namespace ContainerPtVvC33;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSymfonycasts_VerifyEmail_TokenGeneratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'symfonycasts.verify_email.token_generator' shared service.
     *
     * @return \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/verify-email-bundle/src/Generator/VerifyEmailTokenGenerator.php';

        return $container->privates['symfonycasts.verify_email.token_generator'] = new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($container->getEnv('APP_SECRET'));
    }
}
