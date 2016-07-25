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
        <?php
        $str = "a,b,c,d,e,f,g";
        var_dump($str);
        echo "</br>";
        var_dump(explode(",", $str));//以逗号为分割符将字符串 $str 切割成数组
        echo "</br>";
        
        $arr = [1,2,3,4,5,6];
        var_dump($arr);
        echo "</br>";
        var_dump(implode('-', $arr));//以 - 为拼接符将数组$arr拼接成字符串
        echo "</br>";
        
        $arr1 = [1,2,3,4,5];
        //array_push($stack, -1);
        $e = array_pop($arr1);
        var_dump($e);
        echo "</br>";
        var_dump($arr1);
        ?>
    </body>
</html>
