<?
//some global variable or enveroment values system like env/config of laravel
$config = [
    'env' => 'dev',
    'cache '=> [
        'dev' => 'Local',
        'staging' => 'APC',
        'production' => 'Memcache'
    ],
    'cacheConfig' => [
        'Local' => [/*some configuration*/],
        'APC' => [/*some configuration*/],
        'Memcache' => [/*some configuration*/]
    ]
]; 

//Init the cache sistem in a commond side like a "hook" or front "controller". 
Cache::init($config[$config['env']]);

//Set some data
Cache::set('some-data', 'some value');

//Get some data
Cache::get('some-key');