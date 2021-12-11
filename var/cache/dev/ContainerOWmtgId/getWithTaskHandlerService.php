<?php

namespace ContainerOWmtgId;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWithTaskHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'K911\Swoole\Server\Configurator\WithTaskHandler' shared autowired service.
     *
     * @return \K911\Swoole\Server\Configurator\WithTaskHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Configurator/ConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Configurator/WithTaskHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/TaskHandler/TaskHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Bridge/Symfony/Messenger/SwooleServerTaskTransportHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/TaskHandler/NoOpTaskHandler.php';

        return $container->privates['K911\\Swoole\\Server\\Configurator\\WithTaskHandler'] = new \K911\Swoole\Server\Configurator\WithTaskHandler(new \K911\Swoole\Bridge\Symfony\Messenger\SwooleServerTaskTransportHandler(($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService')), new \K911\Swoole\Server\TaskHandler\NoOpTaskHandler()), ($container->privates['K911\\Swoole\\Server\\HttpServerConfiguration'] ?? $container->load('getHttpServerConfigurationService')));
    }
}