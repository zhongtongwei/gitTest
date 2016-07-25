<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a = array("a" => "apple", "b" => "banana", "d" => "orange");
        $b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

        $c = $a + $b; // Union of $a and $b
        echo "Union of \$a and \$b: \n";
        var_dump($c);
        
        $c = $b + $a; // Union of $b and $a
        echo "Union of \$b and \$a: \n";
        var_dump($c);
        
        $arr1 = [1, 2, 3, 4, 5, 6];
        $arr2 = [5, 2, 4, 6, 8, 9];
        $arr3 = [2, 5, 10, 12];
        var_dump(array_intersect($arr1, $arr2, $arr3)); //数组交集
        
        $arr = [1, 2, 3, 4, 5, 6, 7, 8];
        
        // 从第3个元素开始, 直到结束
        var_dump(array_slice($arr, 2));

        // 从第3个元素开始, 长度为4
        var_dump(array_slice($arr, 2, 4));

        // 从第3个元素开始，到倒数第3个元素
        var_dump(array_slice($arr, 2, -2));

        // 注意 索引的差别
        var_dump(array_slice($arr, 2, -2, true));
        
        

        ?>
    </body>
</html>
