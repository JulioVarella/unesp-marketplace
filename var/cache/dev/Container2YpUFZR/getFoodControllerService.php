<?php

namespace Container2YpUFZR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFoodControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FoodController' shared autowired service.
     *
     * @return \App\Controller\FoodController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\FoodController'] = $instance = new \App\Controller\FoodController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\FoodController', $container));

        return $instance;
    }
}
