<?php

namespace Symfony\Config\Swoole;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HttpServer'.\DIRECTORY_SEPARATOR.'ApiConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HttpServer'.\DIRECTORY_SEPARATOR.'StaticConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HttpServer'.\DIRECTORY_SEPARATOR.'ExceptionHandlerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HttpServer'.\DIRECTORY_SEPARATOR.'ServicesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'HttpServer'.\DIRECTORY_SEPARATOR.'SettingsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HttpServerConfig 
{
    private $host;
    private $port;
    private $trustedHosts;
    private $trustedProxies;
    private $runningMode;
    private $socketType;
    private $sslEnabled;
    private $hmr;
    private $api;
    private $static;
    private $exceptionHandler;
    private $services;
    private $settings;
    
    /**
     * @default '0.0.0.0'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function host($value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * @default 9501
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function port($value): self
    {
        $this->port = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function trustedHosts($value): self
    {
        $this->trustedHosts = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function trustedProxies($value): self
    {
        $this->trustedProxies = $value;
    
        return $this;
    }
    
    /**
     * @default 'process'
     * @param ParamConfigurator|'process'|'reactor'|'thread' $value
     * @return $this
     */
    public function runningMode($value): self
    {
        $this->runningMode = $value;
    
        return $this;
    }
    
    /**
     * @default 'tcp'
     * @param ParamConfigurator|'tcp'|'tcp_ipv6'|'udp'|'udp_ipv6'|'unix_dgram'|'unix_stream' $value
     * @return $this
     */
    public function socketType($value): self
    {
        $this->socketType = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sslEnabled($value): self
    {
        $this->sslEnabled = $value;
    
        return $this;
    }
    
    /**
     * @default 'auto'
     * @param ParamConfigurator|'off'|'auto'|'inotify' $value
     * @return $this
     */
    public function hmr($value): self
    {
        $this->hmr = $value;
    
        return $this;
    }
    
    public function api(array $value = []): \Symfony\Config\Swoole\HttpServer\ApiConfig
    {
        if (null === $this->api) {
            $this->api = new \Symfony\Config\Swoole\HttpServer\ApiConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "api()" has already been initialized. You cannot pass values the second time you call api().');
        }
    
        return $this->api;
    }
    
    public function static(array $value = []): \Symfony\Config\Swoole\HttpServer\StaticConfig
    {
        if (null === $this->static) {
            $this->static = new \Symfony\Config\Swoole\HttpServer\StaticConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "static()" has already been initialized. You cannot pass values the second time you call static().');
        }
    
        return $this->static;
    }
    
    public function exceptionHandler(array $value = []): \Symfony\Config\Swoole\HttpServer\ExceptionHandlerConfig
    {
        if (null === $this->exceptionHandler) {
            $this->exceptionHandler = new \Symfony\Config\Swoole\HttpServer\ExceptionHandlerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "exceptionHandler()" has already been initialized. You cannot pass values the second time you call exceptionHandler().');
        }
    
        return $this->exceptionHandler;
    }
    
    public function services(array $value = []): \Symfony\Config\Swoole\HttpServer\ServicesConfig
    {
        if (null === $this->services) {
            $this->services = new \Symfony\Config\Swoole\HttpServer\ServicesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "services()" has already been initialized. You cannot pass values the second time you call services().');
        }
    
        return $this->services;
    }
    
    public function settings(array $value = []): \Symfony\Config\Swoole\HttpServer\SettingsConfig
    {
        if (null === $this->settings) {
            $this->settings = new \Symfony\Config\Swoole\HttpServer\SettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "settings()" has already been initialized. You cannot pass values the second time you call settings().');
        }
    
        return $this->settings;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['host'])) {
            $this->host = $value['host'];
            unset($value['host']);
        }
    
        if (isset($value['port'])) {
            $this->port = $value['port'];
            unset($value['port']);
        }
    
        if (isset($value['trusted_hosts'])) {
            $this->trustedHosts = $value['trusted_hosts'];
            unset($value['trusted_hosts']);
        }
    
        if (isset($value['trusted_proxies'])) {
            $this->trustedProxies = $value['trusted_proxies'];
            unset($value['trusted_proxies']);
        }
    
        if (isset($value['running_mode'])) {
            $this->runningMode = $value['running_mode'];
            unset($value['running_mode']);
        }
    
        if (isset($value['socket_type'])) {
            $this->socketType = $value['socket_type'];
            unset($value['socket_type']);
        }
    
        if (isset($value['ssl_enabled'])) {
            $this->sslEnabled = $value['ssl_enabled'];
            unset($value['ssl_enabled']);
        }
    
        if (isset($value['hmr'])) {
            $this->hmr = $value['hmr'];
            unset($value['hmr']);
        }
    
        if (isset($value['api'])) {
            $this->api = new \Symfony\Config\Swoole\HttpServer\ApiConfig($value['api']);
            unset($value['api']);
        }
    
        if (isset($value['static'])) {
            $this->static = new \Symfony\Config\Swoole\HttpServer\StaticConfig($value['static']);
            unset($value['static']);
        }
    
        if (isset($value['exception_handler'])) {
            $this->exceptionHandler = new \Symfony\Config\Swoole\HttpServer\ExceptionHandlerConfig($value['exception_handler']);
            unset($value['exception_handler']);
        }
    
        if (isset($value['services'])) {
            $this->services = new \Symfony\Config\Swoole\HttpServer\ServicesConfig($value['services']);
            unset($value['services']);
        }
    
        if (isset($value['settings'])) {
            $this->settings = new \Symfony\Config\Swoole\HttpServer\SettingsConfig($value['settings']);
            unset($value['settings']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->host) {
            $output['host'] = $this->host;
        }
        if (null !== $this->port) {
            $output['port'] = $this->port;
        }
        if (null !== $this->trustedHosts) {
            $output['trusted_hosts'] = $this->trustedHosts;
        }
        if (null !== $this->trustedProxies) {
            $output['trusted_proxies'] = $this->trustedProxies;
        }
        if (null !== $this->runningMode) {
            $output['running_mode'] = $this->runningMode;
        }
        if (null !== $this->socketType) {
            $output['socket_type'] = $this->socketType;
        }
        if (null !== $this->sslEnabled) {
            $output['ssl_enabled'] = $this->sslEnabled;
        }
        if (null !== $this->hmr) {
            $output['hmr'] = $this->hmr;
        }
        if (null !== $this->api) {
            $output['api'] = $this->api->toArray();
        }
        if (null !== $this->static) {
            $output['static'] = $this->static->toArray();
        }
        if (null !== $this->exceptionHandler) {
            $output['exception_handler'] = $this->exceptionHandler->toArray();
        }
        if (null !== $this->services) {
            $output['services'] = $this->services->toArray();
        }
        if (null !== $this->settings) {
            $output['settings'] = $this->settings->toArray();
        }
    
        return $output;
    }
    

}
