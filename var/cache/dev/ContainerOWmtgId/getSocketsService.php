<?php

namespace ContainerOWmtgId;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSocketsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'K911\Swoole\Server\Config\Sockets' shared autowired service.
     *
     * @return \K911\Swoole\Server\Config\Sockets
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Config/Sockets.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Config/Socket.php';

        return $container->privates['K911\\Swoole\\Server\\Config\\Sockets'] = new \K911\Swoole\Server\Config\Sockets(new \K911\Swoole\Server\Config\Socket('0.0.0.0', 80, 'tcp', false));
    }
}
