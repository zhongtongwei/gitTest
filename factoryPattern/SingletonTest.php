<?php

/**
 * 单例模式测试
 *
 * @author zhongtw
 */

header("Content-type: text/html; charset=utf-8");
class SingletonTest {
    
    //保存类实例的静态成员变量
    private static $_instance;
 
    /**
     * 私有化构造函数
     */
    private function __construct(){
        echo 'This is a Constructed method;';
    }
    
    /**
     * 私有化克隆函数
     */
    private function __clone() {
        trigger_error('Clone is not allow!',E_USER_ERROR);
    }
    
    /** 
     * Description:静态方法，单例访问统一入口 
     * @return Singleton：返回应用中的唯一对象实例 
     */  
    public static function getInstance() {  
        if (!(self::$_instance instanceof self))  
        {  
            self::$_instance = new self();  
        }  
        return self::$_instance;  
    }  
    
    public function test001(){
        echo "欢迎调用这个方法";
    }
    
}
