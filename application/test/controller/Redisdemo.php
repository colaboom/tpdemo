<?php

namespace app\test\controller;

use think\cache\driver\Redis;

class Redisdemo
{
    static $options = [
        'host'       => '39.101.194.252',
        'port'       => 6379,
        'password'   => '',
        'select'     => 0,
        'timeout'    => 0,
        'expire'     => 0,
        'persistent' => false,
        'prefix'     => '',
    ];

    public function index() {
        echo "test/redisdemo/index";
    }

    public function testConn()
    {
        $redisIns = new Redis(self::$options);
        $redisIns->set("name", "hello world");
        echo $redisIns->get("name");
    }
}