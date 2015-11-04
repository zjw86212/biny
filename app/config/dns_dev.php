<?php
return array(
    'database' => array(
        'host'     => '127.0.0.1',
        'database' => 'Biny',
        'user'     => 'root',
        'password' => 'root',
        'encode' => 'utf8',
        'port' => 3306,
    ),
    'slaveDb' => array(
        'host'     => '127.0.0.1',
        'database' => 'Biny',
        'user'     => 'root',
        'password' => 'root',
        'encode' => 'utf8',
        'port' => 3306,
    ),
    'testDb' => array(
        'host'     => '127.0.0.1',
        'database' => 'test',
        'user'     => 'root',
        'password' => 'root',
        'encode' => 'utf8',
        'port' => 3306,
    ),
    'memcache' => array(
        'host' => '10.1.163.35',
        'port' => 12121
    ),
    'redis' => array(
        'host' => '127.0.0.1',
        'port' => 6379
    ),

    'rootPath' => '@web@/'
);