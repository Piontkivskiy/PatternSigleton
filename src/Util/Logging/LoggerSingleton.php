<?php

namespace Util\Logging;

class LoggerSingleton {
    private static $instance;
    private $log;

    public static function getInstance()
    {
        if(null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    // prevent creating a new instance
    protected function __construct(){
    	$this->log = array();
    }

    //prevent cloning/duplicates
    protected function __clone(){}
    public function __wakeup(){
        throw new \Exception("Cannot unserialize a singleton.");
    }

    //write to log
    public function log($msg)
    {
    	if(!empty($msg)){
    		$this->log[] = $msg;
    	}
    }

    //retrieve log
    public function getLog()
    {
   		return $this->log;
    }
}