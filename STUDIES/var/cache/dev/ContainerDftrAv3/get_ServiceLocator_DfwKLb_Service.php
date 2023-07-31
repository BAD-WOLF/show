<?php

namespace ContainerDftrAv3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DfwKLb_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DfwKLb.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DfwKLb.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\HomeController::delete' => ['privates', '.service_locator.0QJeZ7F', 'get_ServiceLocator_0QJeZ7FService', true],
            'App\\Controller\\HomeController::edit' => ['privates', '.service_locator.0QJeZ7F', 'get_ServiceLocator_0QJeZ7FService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator._2.R.ZS', 'get_ServiceLocator_2_R_ZSService', true],
            'App\\Controller\\HomeController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HomeController::show' => ['privates', '.service_locator.Rhy.U4w', 'get_ServiceLocator_Rhy_U4wService', true],
            'App\\Controller\\LoginController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\MailController::sendEmail' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.VNfh.KW', 'get_ServiceLocator_VNfh_KWService', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.srxzfex', 'get_ServiceLocator_SrxzfexService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.EE0.cm9', 'get_ServiceLocator_EE0_Cm9Service', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.Z9ydiC1', 'get_ServiceLocator_Z9ydiC1Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\HomeController:delete' => ['privates', '.service_locator.0QJeZ7F', 'get_ServiceLocator_0QJeZ7FService', true],
            'App\\Controller\\HomeController:edit' => ['privates', '.service_locator.0QJeZ7F', 'get_ServiceLocator_0QJeZ7FService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator._2.R.ZS', 'get_ServiceLocator_2_R_ZSService', true],
            'App\\Controller\\HomeController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HomeController:show' => ['privates', '.service_locator.Rhy.U4w', 'get_ServiceLocator_Rhy_U4wService', true],
            'App\\Controller\\LoginController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\MailController:sendEmail' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.VNfh.KW', 'get_ServiceLocator_VNfh_KWService', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.srxzfex', 'get_ServiceLocator_SrxzfexService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.EE0.cm9', 'get_ServiceLocator_EE0_Cm9Service', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.Z9ydiC1', 'get_ServiceLocator_Z9ydiC1Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\HomeController::delete' => '?',
            'App\\Controller\\HomeController::edit' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::new' => '?',
            'App\\Controller\\HomeController::show' => '?',
            'App\\Controller\\LoginController::login' => '?',
            'App\\Controller\\MailController::sendEmail' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomeController:delete' => '?',
            'App\\Controller\\HomeController:edit' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:new' => '?',
            'App\\Controller\\HomeController:show' => '?',
            'App\\Controller\\LoginController:login' => '?',
            'App\\Controller\\MailController:sendEmail' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
