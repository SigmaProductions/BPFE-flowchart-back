<?php

namespace ContainerOWmtgId;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwooleBundle_Server_HttpServer_Configurator_WithSigintHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'swoole_bundle.server.http_server.configurator.with_sigint_handler' shared autowired service.
     *
     * @return \K911\Swoole\Server\Configurator\WithServerStartHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Configurator/ConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Configurator/WithServerStartHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/LifecycleHandler/ServerStartHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/LifecycleHandler/SigIntHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/LifecycleHandler/NoOpServerStartHandler.php';

        return $container->privates['swoole_bundle.server.http_server.configurator.with_sigint_handler'] = new \K911\Swoole\Server\Configurator\WithServerStartHandler(new \K911\Swoole\Server\LifecycleHandler\SigIntHandler(($container->privates['K911\\Swoole\\Server\\LifecycleHandler\\ServerStartHandlerInterface'] ?? ($container->privates['K911\\Swoole\\Server\\LifecycleHandler\\ServerStartHandlerInterface'] = new \K911\Swoole\Server\LifecycleHandler\NoOpServerStartHandler()))), ($container->privates['K911\\Swoole\\Server\\HttpServerConfiguration'] ?? $container->load('getHttpServerConfigurationService')));
    }
}
