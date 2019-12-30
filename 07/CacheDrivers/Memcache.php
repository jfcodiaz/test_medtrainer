<?php 
namespace CacheDrivers;

class Memcache implements CacheDriverInteface{
    use DefaultGetAndSet;
    public function connect($config){

    }
}