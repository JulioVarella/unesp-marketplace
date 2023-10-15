<?php

namespace Container08ipb7Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSellerRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\SellerRepository' shared autowired service.
     *
     * @return \App\Repository\SellerRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\SellerRepository'] = new \App\Repository\SellerRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}