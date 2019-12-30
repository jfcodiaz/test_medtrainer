<?php 
namespace CacheDrivers;

class APC implements CacheDriverInteface{
    use DefaultGetAndSet;
    public function connect($config){

    }
}