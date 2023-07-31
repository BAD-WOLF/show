<?php

namespace ContainerRFr1wHR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSchebTwoFactor_FirewallContextService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'scheb_two_factor.firewall_context' shared service.
     *
     * @return \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/scheb/2fa-bundle/Security/TwoFactor/TwoFactorFirewallContext.php';

        return $container->services['scheb_two_factor.firewall_context'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallContext([]);
    }
}
