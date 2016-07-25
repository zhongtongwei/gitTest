<?php
Yii::app()->clientScript->registerCoreScript('jquery');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>test001</h1>
        <h2>页面地址为：<?php echo Yii::app()->request->hostInfo . "/test/test1" ?></h2>
        <h2>页面地址为：<?php echo Yii::app()->request->url ?></h2>
        <?php
        // put your code here
        ?>
    </body>
<script type="text/javascript">
$(document).ready(function () {
    //is_weixin();
});


function is_weixin(){
    var ua = navigator.userAgent.toLowerCase();//获取判断用的对象
    if (ua.match(/MicroMessenger/i) == "micromessenger") {
        alert ('微信浏览器');
    }else {
        alert ('不是微信浏览器');
    }
}
</script>
</html>
