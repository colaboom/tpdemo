<?php

namespace app\test\controller;

use app\test\model\TestModel;

class Test
{
    public function index()
    {
        $testModel = new TestModel();
        echo $testModel->index();
    }

    public function test()
    {
        echo "test/test/test";
    }
}
