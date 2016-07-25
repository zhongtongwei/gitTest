<?php


/**
 * Description of TestController
 *
 * @author Administrator
 */
header("Content-type: text/html; charset=utf-8");
class TestController extends Controller {
    
    public $layout = false;
    
    public function actionTest012() {
        $arr = array(9,5,2,7,4,8,6,3,1,0);
        print_r($arr);
    }
    
    public function actionTest011(){
        $this->render("test001");
    }
    
    public function actionTest010() {
        $request = Yii::app()->request;
        $currentUrl = $request->hostInfo . $request->url;
        $this->render("test001", array('currentUrl'=>$currentUrl));
    }


    public function actionTest001() {
        $request = Yii::app()->request;
        $currentUrl = $request->hostInfo . $request->url;
        echo $request->hostInfo;
        echo '</br>';
        echo $request->url;
        echo '</br>';
        echo $currentUrl;
        
        echo '</br>';
        $str = 'abc';
        $str = $str . 'def';
        echo $str;
        
        $this->render("test001");
        //$this->redirect("https://www.baidu.com/");
        //Yii::app()->end();
    }
    
    public function actionTest002() {
        $jsonStr = '{"firstName":"Bill","lastName":"Gates"}';
        //echo 'json字符串为：' . $jsonStr;
        $jsonObj = json_decode($jsonStr, true);
        //echo '</br>json对象里面的firstName为：' . $jsonObj['firstName'];
        $jsonStr1 = json_encode($jsonObj);
        //echo '</br>json对象转为json字符串结果为：' . $jsonStr1;
        
        $arr = (array)$jsonObj;
        //echo var_export($jsonObj); 
        //echo '</br>' . var_export($arr);
        print_r($arr);
        //array_push($arr, "a => 23", "b");
        $arr['sex'] = 'boy';
        print_r($arr);
        
        $str001 = json_encode($arr);
        echo $str001;
        Yii::app()->end();
    }
    
    /**
     * json格式字符串转化测试
     */
    public function actionTest003() {
        $postStr = isset($GLOBALS['HTTP_RAW_POST_DATA']) ? $GLOBALS['HTTP_RAW_POST_DATA'] : file_get_contents("php://input");
        $jsonObj = json_decode($postStr, true);        
        //$str = $jsonObj->param01;
        $str = $jsonObj['param01'];
        //echo $str;

        $json = '{"a":"php","b":"mysql","c":3}';  
        $json_Class=json_decode($json);   
        $json_Array=json_decode($json, true);   
        print_r($json_Class);   
        print_r($json_Array);        
        Yii::app()->end();
    }
    
    public function actionTest004(){
        try{
            $str = $this->test001(1, a, 3);
            //throw new Exception($str);
        }  catch (Exception $e){
            echo $e->getMessage();
            //Yii::app()->end();
        } finally {
             echo 'Hello World';
        }
      
        
       
    }
    
    public function actionTest005() {
        try{
            $this->checkNum(2);
        }catch(Exception $e){
            //echo $e . '</br>';
            echo 'Message: ' .$e->getMessage();
        } finally {
            echo 'hello';
        }
        echo '12345';
    }
    
    public function test001($num1, $num2, $num3 = 3, $num4 = 4){
        return $num1 + $num2 + $num3 + $num4;
    }
    
    public function checkNum($num){
        if($num > 1){
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }
    
    public function actionTest2001() {
        $url = "http://md.mingyizd.com/mobiledoctor/doctor/Wxlogin?userid=100440";
        header('Location:' . $url);
        sleep(5);
        $returnUrl = "http://md.mingyizd.com/mobiledoctor/patient/create";
        header('Location:' . $returnUrl);
        Yii::app()->end();
    }
    
    
    public function sock_get($url){  
        $info=parse_url($url);
        $fp=fsockopen($info["host"],80,$errno,$errstr,3);
        $head="GET ".$info['path']."?".$info["query"]." HTTP/1.0\r\n";
        $head.="Host: ".$info['host']."\r\n";
        $head.="\r\n";
        $write=fputs($fp,$head);
        while(!feof($fp)){  
            $line=fgets($fp); 
            echo $line."<br>";
        }
    }



    
}
