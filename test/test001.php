<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $hens[0]=3;
            $hens[1]=5;
            $hens[2]=3.5;
            $hens[3]=2.8;
            $hens[4]=3.6;
            
            echo "总共有" . count($hens) . "只母鸡；</br>";
            
            $allwight = 0;
            for($i=0; $i<count($hens); $i++){
                echo "第" . $i . "只母鸡的重量为" . $hens[$i] . "kg</br>";
                $allwight += $hens[$i];
            }
            echo count($hens) . "只鸡的总重量为：" . $allwight . "kg</br>";
            echo "平均每只鸡的重量为" . $allwight / count($hens) . "kg</br>";
            
            $arr = array("timestamp" => "e123", "nonce" => "d897" , "msg_signature" => "h897");
            print_r($arr);
            echo "<br/>";
            var_dump($arr);
            echo "<br/>";
            
            foreach ($arr as $key => $value) {
                echo $key . "=" . $value . "</br>";
            }

            
        ?>
    </body>
</html>
