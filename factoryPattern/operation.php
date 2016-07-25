<?php

// 运算抽象类
class Operation{
    
    // 数字A
    protected $_numberA = null;
    
    // 数字B
    protected $_numberB = null;

    /**
     * 设置成员A
     *
     * @param double $num 数字
     * @return void
     */
    public function setNumberA($num){
        $this->_numberA = $num;
    }

    /**
     * 获取成员A
     *
     * @return double 数字
     */
    public function getNumberA(){
        return $this->_numberA;
    }

    /**
     * 设置成员B
     *
     * @param double $num 数字
     * @return void
     */
    public function setNumberB($num){
        $this->_numberB = $num;
    }

    /**
     * 获取成员B
     *
     * @return double 数字
     */
    public function getNumberB(){
        return $this->_numberA;
    }

    /**
     * 获取运算结果
     *
     * @return double 数字
     */
    public function getResult(){
        return null;
    }
}

// 加法类
class OperationAdd extends Operation{

    /**
     * 获取运算结果
     *
     * @return double 数字
     */
    public function getResult(){
        return $this->_numberA + $this->_numberB;
    }
}

// 减法类
class OperationSub extends Operation{

    /**
     * 获取运算结果
     *
     * @return double 数字
     */
    public function getResult(){
        return $this->_numberA - $this->_numberB;
    }
}

// 乘法类
class OperationMul extends Operation{

    /**
     * 获取运算结果
     *
     * @return double 数字
     */
    public function getResult(){
        return $this->_numberA * $this->_numberB;
    }
}

// 除法类
class OperationDiv extends Operation{

    /**
     * 获取运算结果
     *
     * @return double 数字
     */
    public function getResult(){
        if ($this->_numberB == 0) {
            return null;
        }
        return $this->_numberA / $this->_numberB;
    }
    
}