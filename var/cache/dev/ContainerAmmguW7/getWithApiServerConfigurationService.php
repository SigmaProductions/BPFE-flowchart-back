<?php

namespace ContainerAmmguW7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWithApiServerConfigurationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'K911\Swoole\Server\Api\WithApiServerConfiguration' shared autowired service.
     *
     * @return \K911\Swoole\Server\Api\WithApiServerConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Configurator/ConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Api/WithApiServerConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/RequestHandler/RequestHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/RequestHandler/ExceptionRequestHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Api/ApiServerRequestHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Api/ApiServerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Api/ApiServer.php';

        return $container->privates['K911\\Swoole\\Server\\Api\\WithApiServerConfiguration'] = new \K911\Swoole\Server\Api\WithApiServerConfiguration(($container->privates['K911\\Swoole\\Server\\Config\\Sockets'] ?? $container->load('getSocketsService')), new \K911\Swoole\Server\RequestHandler\ExceptionRequestHandler(new \K911\Swoole\Server\Api\ApiServerRequestHandler(new \K911\Swoole\Server\Api\ApiServer(($container->privates['K911\\Swoole\\Server\\HttpServer'] ?? $container->load('getHttpServerService')), ($container->privates['K911\\Swoole\\Server\\HttpServerConfiguration'] ?? $container->load('getHttpServerConfigurationService')))), ($container->privates['K911\\Swoole\\Server\\RequestHandler\\ExceptionHandler\\JsonExceptionHandler'] ?? $container->load('getJsonExceptionHandlerService'))));
    }
}
