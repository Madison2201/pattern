<?php
class Singleton
{
    private static $instance = null;

    protected function __construct(){ }
    protected function __clone(){ }

    protected function __wakeup(){
        throw new \Exception("Cannot unserialize a singleton");
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Self;
        }
        return self::$instance;
    }
}


