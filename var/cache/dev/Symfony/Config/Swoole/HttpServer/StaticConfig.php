<?php

namespace Symfony\Config\Swoole\HttpServer;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class StaticConfig 
{
    private $strategy;
    private $publicDir;
    private $mimeTypes;
    
    /**
     * @default 'auto'
     * @param ParamConfigurator|'off'|'default'|'advanced'|'auto' $value
     * @return $this
     */
    public function strategy($value): self
    {
        $this->strategy = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.project_dir%/public'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function publicDir($value): self
    {
        $this->publicDir = $value;
    
        return $this;
    }
    
    /**
     * File extensions to mime types map.
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function mimeTypes($value = array (
    )): self
    {
        $this->mimeTypes = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['strategy'])) {
            $this->strategy = $value['strategy'];
            unset($value['strategy']);
        }
    
        if (isset($value['public_dir'])) {
            $this->publicDir = $value['public_dir'];
            unset($value['public_dir']);
        }
    
        if (isset($value['mime_types'])) {
            $this->mimeTypes = $value['mime_types'];
            unset($value['mime_types']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->strategy) {
            $output['strategy'] = $this->strategy;
        }
        if (null !== $this->publicDir) {
            $output['public_dir'] = $this->publicDir;
        }
        if (null !== $this->mimeTypes) {
            $output['mime_types'] = $this->mimeTypes;
        }
    
        return $output;
    }
    

}
