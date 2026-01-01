<?php
//select sorting选择排序
//find min, take out, swap position with the rest
$arr = [5,3,7,1,23,12,13,9,2,2];
$ori_length = count($arr);
$arr_out=array();


for($i=0;$i<$ori_length;$i++){
    $min = array_shift($arr);

    for($j=0;$j<count($arr);$j++){
        if($min>$arr[$j]){
            $tmp = $min;
            $min = $arr[$j];
            $arr[$j] = $tmp;
        }
    }
    array_push($arr_out, $min);


}
print_r($arr_out);

