<?php

namespace ContainerAmmguW7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWithServerManagerStopHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'K911\Swoole\Server\Configurator\WithServerManagerStopHandler' shared autowired service.
     *
     * @return \K911\Swoole\Server\Configurator\WithServerManagerStopHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Configurator/ConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/Configurator/WithServerManagerStopHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/LifecycleHandler/ServerManagerStopHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/LifecycleHandler/NoOpServerManagerStopHandler.php';

        return $container->privates['K911\\Swoole\\Server\\Configurator\\WithServerManagerStopHandler'] = new \K911\Swoole\Server\Configurator\WithServerManagerStopHandler(new \K911\Swoole\Server\LifecycleHandler\NoOpServerManagerStopHandler());
    }
}
