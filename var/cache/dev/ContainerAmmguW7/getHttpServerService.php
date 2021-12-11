<?php

namespace ContainerAmmguW7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHttpServerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'K911\Swoole\Server\HttpServer' shared autowired service.
     *
     * @return \K911\Swoole\Server\HttpServer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/HttpServer.php';

        return $container->privates['K911\\Swoole\\Server\\HttpServer'] = new \K911\Swoole\Server\HttpServer(($container->privates['K911\\Swoole\\Server\\HttpServerConfiguration'] ?? $container->load('getHttpServerConfigurationService')));
    }
}
