<?php

namespace Symfony\Config\Swoole\HttpServer;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SettingsConfig 
{
    private $logFile;
    private $logLevel;
    private $pidFile;
    private $bufferOutputSize;
    private $packageMaxLength;
    private $workerCount;
    private $reactorCount;
    private $taskWorkerCount;
    private $workerMaxRequest;
    private $workerMaxRequestGrace;
    
    /**
     * @default '%kernel.logs_dir%/swoole_%kernel.environment%.log'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logFile($value): self
    {
        $this->logFile = $value;
    
        return $this;
    }
    
    /**
     * @default 'auto'
     * @param ParamConfigurator|'auto'|'debug'|'trace'|'info'|'notice'|'warning'|'error' $value
     * @return $this
     */
    public function logLevel($value): self
    {
        $this->logLevel = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pidFile($value): self
    {
        $this->pidFile = $value;
    
        return $this;
    }
    
    /**
     * @default 2097152
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bufferOutputSize($value): self
    {
        $this->bufferOutputSize = $value;
    
        return $this;
    }
    
    /**
     * @default 8388608
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function packageMaxLength($value): self
    {
        $this->packageMaxLength = $value;
    
        return $this;
    }
    
    /**
     * @default 1
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function workerCount($value): self
    {
        $this->workerCount = $value;
    
        return $this;
    }
    
    /**
     * @default 1
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function reactorCount($value): self
    {
        $this->reactorCount = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function taskWorkerCount($value): self
    {
        $this->taskWorkerCount = $value;
    
        return $this;
    }
    
    /**
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function workerMaxRequest($value): self
    {
        $this->workerMaxRequest = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function workerMaxRequestGrace($value): self
    {
        $this->workerMaxRequestGrace = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['log_file'])) {
            $this->logFile = $value['log_file'];
            unset($value['log_file']);
        }
    
        if (isset($value['log_level'])) {
            $this->logLevel = $value['log_level'];
            unset($value['log_level']);
        }
    
        if (isset($value['pid_file'])) {
            $this->pidFile = $value['pid_file'];
            unset($value['pid_file']);
        }
    
        if (isset($value['buffer_output_size'])) {
            $this->bufferOutputSize = $value['buffer_output_size'];
            unset($value['buffer_output_size']);
        }
    
        if (isset($value['package_max_length'])) {
            $this->packageMaxLength = $value['package_max_length'];
            unset($value['package_max_length']);
        }
    
        if (isset($value['worker_count'])) {
            $this->workerCount = $value['worker_count'];
            unset($value['worker_count']);
        }
    
        if (isset($value['reactor_count'])) {
            $this->reactorCount = $value['reactor_count'];
            unset($value['reactor_count']);
        }
    
        if (isset($value['task_worker_count'])) {
            $this->taskWorkerCount = $value['task_worker_count'];
            unset($value['task_worker_count']);
        }
    
        if (isset($value['worker_max_request'])) {
            $this->workerMaxRequest = $value['worker_max_request'];
            unset($value['worker_max_request']);
        }
    
        if (isset($value['worker_max_request_grace'])) {
            $this->workerMaxRequestGrace = $value['worker_max_request_grace'];
            unset($value['worker_max_request_grace']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->logFile) {
            $output['log_file'] = $this->logFile;
        }
        if (null !== $this->logLevel) {
            $output['log_level'] = $this->logLevel;
        }
        if (null !== $this->pidFile) {
            $output['pid_file'] = $this->pidFile;
        }
        if (null !== $this->bufferOutputSize) {
            $output['buffer_output_size'] = $this->bufferOutputSize;
        }
        if (null !== $this->packageMaxLength) {
            $output['package_max_length'] = $this->packageMaxLength;
        }
        if (null !== $this->workerCount) {
            $output['worker_count'] = $this->workerCount;
        }
        if (null !== $this->reactorCount) {
            $output['reactor_count'] = $this->reactorCount;
        }
        if (null !== $this->taskWorkerCount) {
            $output['task_worker_count'] = $this->taskWorkerCount;
        }
        if (null !== $this->workerMaxRequest) {
            $output['worker_max_request'] = $this->workerMaxRequest;
        }
        if (null !== $this->workerMaxRequestGrace) {
            $output['worker_max_request_grace'] = $this->workerMaxRequestGrace;
        }
    
        return $output;
    }
    

}
