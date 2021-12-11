<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Swoole'.\DIRECTORY_SEPARATOR.'HttpServerConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SwooleConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $httpServer;
    
    public function httpServer(array $value = []): \Symfony\Config\Swoole\HttpServerConfig
    {
        if (null === $this->httpServer) {
            $this->httpServer = new \Symfony\Config\Swoole\HttpServerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "httpServer()" has already been initialized. You cannot pass values the second time you call httpServer().');
        }
    
        return $this->httpServer;
    }
    
    public function getExtensionAlias(): string
    {
        return 'swoole';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['http_server'])) {
            $this->httpServer = new \Symfony\Config\Swoole\HttpServerConfig($value['http_server']);
            unset($value['http_server']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->httpServer) {
            $output['http_server'] = $this->httpServer->toArray();
        }
    
        return $output;
    }
    

}
