<?php

// 加载所有的实例类
include_once ('operation.php');

// 创建一个工程，用来生产实例
class OperationFactory{

    /**
     * 根据运算不同实例不同的对象
     *
     * @return object 返回实例化的对象
     */
    public static function createOperate($operate){
        $oper = null;
        switch ($operate) {
            
            // 实例加法类
            case '+' :
                $oper = new OperationAdd();
                break;
            
            // 实例减法类
            case '-' :
                $oper = new OperationSub();
                break;
            
            // 实例乘法类
            case '*' :
                $oper = new OperationMul();
                break;
            
            // 实例乘法类
            case '/' :
                $oper = new OperationDiv();
                break;
            
            default :
                $oper = null;
        }
        
        return $oper;
    }
}

// 客户端
class Client{

    /**
     * 主函数
     */
    public function main(){
        // 工厂创建实例
        $operObject = OperationFactory::createOperate('*');
        
        if ($operObject == null) {
            return '$operate not found';
        }
        
        // 设置数字A
        $operObject->setNumberA(5.2);
        
        // 设置数字B
        $operObject->setNumberB(2);
        
        // 运算
        echo $operObject->getResult();
    }
}

// 程序入口
function start(){
    // 调用客户端主函数
    $client = new Client();
    $client->main();
}

start();
