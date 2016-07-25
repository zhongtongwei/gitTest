<?php

/**
 * Description of Singleton
 *
 * @author Administrator
 */
class Singleton {
    
    /** 
     * Description:
     * （1）静态变量，保存全局实例，跟类绑定，跟对象无关 
     *  (2）私有属性，为了避免类外直接调用 类名::$instance，防止为空 
     */  
    private static $instance;  
      
    /** 
     * Description:数据库连接句柄 
     */  
    private $db;  
      
    /** 
     * Description:私有化构造函数，防止外界实例化对象 
     */  
    private static function __construct()  
    {  
    }  
      
    /** 
     * Description:私有化克隆函数，防止外界克隆对象 
     */  
    private function __clone()  
    {  
    }  
      
    /** 
     * Description:静态方法，单例访问统一入口 
     * @return Singleton：返回应用中的唯一对象实例 
     */  
    public static function GetInstance()  
    {  
        if (!(self::$instance instanceof self))  
        {  
            self::$instance = new self();  
        }  
        return self::$instance;  
    }  
      
    /** 
     * Description:获取数据库的私有方法的连接句柄 
     */  
    public function GetDbConnect()  
    {  
        return $this->db;  
    }  
    
}
