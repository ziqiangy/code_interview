<?php
//冒泡排序
//swap adjacent position, iterate again 
$arr = [5,3,7,1,23,12,13,0,2,2];

for($k=0;$k<count($arr);$k++){

    for($i=0,$j=1;$i<count($arr)-1;$i++,$j++){
        if($arr[$i]>$arr[$j]){
            $tmp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $tmp;
        }
    }
}

print_r($arr);

