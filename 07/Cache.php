<?php

class Cache {

    private static $driver;
    
    public static function init($driver){
        global $config;
        $className = 'CacheDrivers\\'.$driver;
        self::$driver = new $driver();
        self::$driver->connect($config['cacheConfig'][$driver]);
    }
    

    public static function get($key){
        return self::$driver->get($key);
    }

    public static function set($key, $value){
        self::$driver->set($key, $value);
        return self::$driver;
    }

}