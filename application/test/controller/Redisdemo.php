<?php

namespace app\test\controller;

use think\cache\driver\Redis;
use think\Config;

class Redisdemo
{
    public function index() {
        echo "test/redisdemo/index";
    }

    public function testConn()
    {
        $redisIns = new Redis(Config::get("redis"));
        $redisIns->set("name", "hello world");
        echo $redisIns->get("name");
    }
}