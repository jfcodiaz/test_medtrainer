<?php
namespace CacheDrivers;

interface CacheDriverInteface {
    public function connect($config);
    public function get($key);
    public function set($key,$value);
}