<?php/** * Created by PhpStorm. * User: chentao * Date: 2019/12/5 * Time: 11:02 AM *///declare(strict_types=0);require "/Users/chentao/Documents/work/interview/Helper/cuttxt.php";cutTXT::cutTXTbyNumber(__DIR__."/test.txt", 2);die;$redis = new Redis();$redis->connect('127.0.0.1',3306);die;class A {    private $x = 1;}// PHP 7 之前版本定义闭包函数代码$getXCB = function() {    return $this->x;};// 闭包函数绑定到类 A 上//$getX = $getXCB->bindTo(new A, 'A');//echo $getX();//print(PHP_EOL);echo $getXCB->call(new A, 'A');