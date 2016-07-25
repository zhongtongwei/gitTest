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
        $queue = [];

        //入队列
        array_unshift($queue, 1);
        var_dump($queue);
        array_unshift($queue, 2);
        var_dump($queue);
        array_unshift($queue, 3);
        var_dump($queue);
        array_unshift($queue, 4);
        var_dump($queue);

        //出队列
        $e = array_pop($queue);
        var_dump($e); // 1
        $e = array_pop($queue);
        var_dump($e); // 2
        $e = array_pop($queue);
        var_dump($e); // 3
        $e = array_pop($queue);
        var_dump($e); // 4
        ?>
    </body>
</html>
