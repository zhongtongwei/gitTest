<?php


/**
 * Yii过滤器测试
 *
 * @author zhongtw
 */
class FilterTestController extends Controller {
    
    public function actionTest001(){
        $userid = Yii::app()->session['USERID'];//读取session
        echo '欢迎登录' . $userid;
        unset(Yii::app()->session['USERID']);//移除session
        Yii::app()->end();
    }
    
    public function actionTest002(){
        Yii::app()->session['USERID'] = 'zhongtongwei';//设置session
        echo '登录成功';
        Yii::app()->end();
    }

    public function filterCheckLogin($filterChina) {
        $userid = Yii::app()->session['USERID'];
        if(isset($userid)){
            $filterChina->run();
        }else{
            echo '请登录';
            Yii::app()->end();
        }
    }


    /**
     * 访问actionTest001的时候先通过filterCheckLogin
     * @return type
     */
    public function filters() {
        return array(
            'checkLogin + test001'
        );
    }
    
    
}
