<?php

namespace Symfony\Config\Swoole\HttpServer;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ExceptionHandlerConfig 
{
    private $type;
    private $verbosity;
    private $handlerId;
    
    /**
     * @default 'auto'
     * @param ParamConfigurator|'json'|'production'|'symfony'|'custom'|'auto' $value
     * @return $this
     */
    public function type($value): self
    {
        $this->type = $value;
    
        return $this;
    }
    
    /**
     * @default 'auto'
     * @param ParamConfigurator|'trace'|'verbose'|'default'|'auto' $value
     * @return $this
     */
    public function verbosity($value): self
    {
        $this->verbosity = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function handlerId($value): self
    {
        $this->handlerId = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['type'])) {
            $this->type = $value['type'];
            unset($value['type']);
        }
    
        if (isset($value['verbosity'])) {
            $this->verbosity = $value['verbosity'];
            unset($value['verbosity']);
        }
    
        if (isset($value['handler_id'])) {
            $this->handlerId = $value['handler_id'];
            unset($value['handler_id']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->type) {
            $output['type'] = $this->type;
        }
        if (null !== $this->verbosity) {
            $output['verbosity'] = $this->verbosity;
        }
        if (null !== $this->handlerId) {
            $output['handler_id'] = $this->handlerId;
        }
    
        return $output;
    }
    

}
