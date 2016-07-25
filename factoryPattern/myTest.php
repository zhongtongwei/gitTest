<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of myTest
 *
 * @author Administrator
 */

include_once ('SingletonTest.php');
class myTest {
     
    /**
     * 主函数
     */
    public function main() {
        //$singletonTest = SingletonTest::getInstance();
        $singletonTest = new SingletonTest();
        $singletonTest->test001();
    }
    
}

// 程序入口
function start(){
    // 调用客户端主函数
    $client = new myTest();
    $client->main();
}

start();
