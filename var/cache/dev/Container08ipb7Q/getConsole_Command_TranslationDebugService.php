<?php

namespace Container08ipb7Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_TranslationDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.translation_debug' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.translation_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand(($container->services['translator'] ?? $container->getTranslatorService()), ($container->privates['translation.reader'] ?? $container->load('getTranslation_ReaderService')), ($container->privates['translation.extractor'] ?? $container->load('getTranslation_ExtractorService')), 'E:\\website-skeleton/translations', 'E:\\website-skeleton/templates', [0 => 'E:\\website-skeleton\\vendor\\symfony\\validator/Resources/translations', 1 => 'E:\\website-skeleton\\vendor\\symfony\\form/Resources/translations', 2 => 'E:\\website-skeleton\\vendor\\symfony\\security-core/Resources/translations'], [0 => 'E:\\website-skeleton\\vendor\\symfony\\twig-bridge/Resources/views/Email', 1 => 'E:\\website-skeleton\\vendor\\symfony\\twig-bridge/Resources/views/Form', 2 => 'E:\\website-skeleton\\vendor\\symfony\\framework-bundle\\Command\\TranslationDebugCommand.php', 3 => 'E:\\website-skeleton\\vendor\\symfony\\framework-bundle\\CacheWarmer\\TranslationsCacheWarmer.php', 4 => 'E:\\website-skeleton\\vendor\\symfony\\form\\Extension\\Core\\Type\\ChoiceType.php', 5 => 'E:\\website-skeleton\\vendor\\symfony\\form\\Extension\\Core\\Type\\FileType.php', 6 => 'E:\\website-skeleton\\vendor\\symfony\\form\\Extension\\Core\\Type\\ColorType.php', 7 => 'E:\\website-skeleton\\vendor\\symfony\\form\\Extension\\Core\\Type\\TransformationFailureExtension.php', 8 => 'E:\\website-skeleton\\vendor\\symfony\\form\\Extension\\Validator\\Type\\FormTypeValidatorExtension.php', 9 => 'E:\\website-skeleton\\vendor\\symfony\\form\\Extension\\Validator\\Type\\UploadValidatorExtension.php', 10 => 'E:\\website-skeleton\\vendor\\symfony\\form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension.php', 11 => 'E:\\website-skeleton\\vendor\\symfony\\validator\\ValidatorBuilder.php', 12 => 'E:\\website-skeleton\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php', 13 => 'E:\\website-skeleton\\vendor\\symfony\\twig-bridge\\Extension\\FormExtension.php', 14 => 'E:\\website-skeleton\\vendor\\symfony\\translation\\DataCollector\\TranslationDataCollector.php'], []);

        $instance->setName('debug:translation');
        $instance->setDescription('Display translation messages information');

        return $instance;
    }
}
