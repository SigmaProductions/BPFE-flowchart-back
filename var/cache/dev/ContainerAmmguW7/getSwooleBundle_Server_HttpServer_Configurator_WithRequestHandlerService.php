<?php

namespace ContainerAmmguW7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSwooleBundle_Server_HttpServer_Configurator_WithRequestHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'swoole_bundle.server.http_server.configurator.with_request_handler' shared autowired service.
     *
     * @return \K911\Swoole\Server\Configurator\WithRequestHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Configurator/ConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Configurator/WithRequestHandler.php';

        return $container->privates['swoole_bundle.server.http_server.configurator.with_request_handler'] = new \K911\Swoole\Server\Configurator\WithRequestHandler(($container->privates['K911\\Swoole\\Server\\RequestHandler\\AdvancedStaticFilesServer'] ?? $container->load('getAdvancedStaticFilesServerService')));
    }
}
