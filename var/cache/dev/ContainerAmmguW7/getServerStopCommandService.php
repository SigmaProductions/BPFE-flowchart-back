<?php

namespace ContainerAmmguW7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServerStopCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'K911\Swoole\Bridge\Symfony\Bundle\Command\ServerStopCommand' shared autowired service.
     *
     * @return \K911\Swoole\Bridge\Symfony\Bundle\Command\ServerStopCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Bridge/Symfony/Bundle/Command/ServerStopCommand.php';

        $container->privates['K911\\Swoole\\Bridge\\Symfony\\Bundle\\Command\\ServerStopCommand'] = $instance = new \K911\Swoole\Bridge\Symfony\Bundle\Command\ServerStopCommand(($container->privates['K911\\Swoole\\Server\\HttpServer'] ?? $container->load('getHttpServerService')), ($container->privates['K911\\Swoole\\Server\\HttpServerConfiguration'] ?? $container->load('getHttpServerConfigurationService')), ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));

        $instance->setName('swoole:server:stop');

        return $instance;
    }
}
