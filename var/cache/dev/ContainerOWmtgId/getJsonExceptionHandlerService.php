<?php

namespace ContainerOWmtgId;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJsonExceptionHandlerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'K911\Swoole\Server\RequestHandler\ExceptionHandler\JsonExceptionHandler' shared autowired service.
     *
     * @return \K911\Swoole\Server\RequestHandler\ExceptionHandler\JsonExceptionHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/RequestHandler/ExceptionHandler/ExceptionHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Server/RequestHandler/ExceptionHandler/JsonExceptionHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/k911/swoole-bundle/src/Component/ExceptionArrayTransformer.php';

        return $container->privates['K911\\Swoole\\Server\\RequestHandler\\ExceptionHandler\\JsonExceptionHandler'] = new \K911\Swoole\Server\RequestHandler\ExceptionHandler\JsonExceptionHandler(new \K911\Swoole\Component\ExceptionArrayTransformer(), 'trace');
    }
}
