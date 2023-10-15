<?php

namespace Container2YpUFZR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_factory' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['maker.auto_command.make_factory'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Zenstruck\Foundry\Bundle\Maker\MakeFactory(($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['.zenstruck_foundry.maker.factory.generator'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_GeneratorService')), new \Zenstruck\Foundry\Bundle\Maker\Factory\NoPersistenceObjectsAutoCompleter('E:\\website-skeleton'), new \Zenstruck\Foundry\Bundle\Maker\Factory\FactoryCandidatesClassesExtractor(($container->privates['.zenstruck_foundry.chain_manager_registry'] ?? $container->load('get_ZenstruckFoundry_ChainManagerRegistryService')), ($container->privates['.zenstruck_foundry.maker.factory.factory_class_map'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_FactoryClassMapService'))), 'Factory'), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')), ($container->privates['maker.template_linter'] ?? ($container->privates['maker.template_linter'] = new \Symfony\Bundle\MakerBundle\Util\TemplateLinter($container->getEnv('default::string:MAKER_PHP_CS_FIXER_BINARY_PATH'), $container->getEnv('default::string:MAKER_PHP_CS_FIXER_CONFIG_PATH')))));

        $instance->setName('make:factory');
        $instance->setDescription('Creates a Foundry model factory for a Doctrine entity class or a regular object');

        return $instance;
    }
}
