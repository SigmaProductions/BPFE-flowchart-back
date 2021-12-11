<?php

namespace Symfony\Config\Swoole\HttpServer;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ServicesConfig 
{
    private $debugHandler;
    private $trustAllProxiesHandler;
    private $cloudfrontProtoHeaderHandler;
    private $entityManagerHandler;
    private $blackfireProfiler;
    private $sessionCookieEventListener;
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debugHandler($value): self
    {
        $this->debugHandler = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function trustAllProxiesHandler($value): self
    {
        $this->trustAllProxiesHandler = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function cloudfrontProtoHeaderHandler($value): self
    {
        $this->cloudfrontProtoHeaderHandler = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function entityManagerHandler($value): self
    {
        $this->entityManagerHandler = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function blackfireProfiler($value): self
    {
        $this->blackfireProfiler = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sessionCookieEventListener($value): self
    {
        $this->sessionCookieEventListener = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['debug_handler'])) {
            $this->debugHandler = $value['debug_handler'];
            unset($value['debug_handler']);
        }
    
        if (isset($value['trust_all_proxies_handler'])) {
            $this->trustAllProxiesHandler = $value['trust_all_proxies_handler'];
            unset($value['trust_all_proxies_handler']);
        }
    
        if (isset($value['cloudfront_proto_header_handler'])) {
            $this->cloudfrontProtoHeaderHandler = $value['cloudfront_proto_header_handler'];
            unset($value['cloudfront_proto_header_handler']);
        }
    
        if (isset($value['entity_manager_handler'])) {
            $this->entityManagerHandler = $value['entity_manager_handler'];
            unset($value['entity_manager_handler']);
        }
    
        if (isset($value['blackfire_profiler'])) {
            $this->blackfireProfiler = $value['blackfire_profiler'];
            unset($value['blackfire_profiler']);
        }
    
        if (isset($value['session_cookie_event_listener'])) {
            $this->sessionCookieEventListener = $value['session_cookie_event_listener'];
            unset($value['session_cookie_event_listener']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->debugHandler) {
            $output['debug_handler'] = $this->debugHandler;
        }
        if (null !== $this->trustAllProxiesHandler) {
            $output['trust_all_proxies_handler'] = $this->trustAllProxiesHandler;
        }
        if (null !== $this->cloudfrontProtoHeaderHandler) {
            $output['cloudfront_proto_header_handler'] = $this->cloudfrontProtoHeaderHandler;
        }
        if (null !== $this->entityManagerHandler) {
            $output['entity_manager_handler'] = $this->entityManagerHandler;
        }
        if (null !== $this->blackfireProfiler) {
            $output['blackfire_profiler'] = $this->blackfireProfiler;
        }
        if (null !== $this->sessionCookieEventListener) {
            $output['session_cookie_event_listener'] = $this->sessionCookieEventListener;
        }
    
        return $output;
    }
    

}
