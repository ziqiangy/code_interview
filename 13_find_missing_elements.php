<?php

$arr_1 = [1,2,3,4,5];
$arr_2 = [3,4,5,6,7];   

$arr_1_same = array();
$arr_1_diff = array(); 
for($i=0;$i<count($arr_1);$i++){
    $ele = $arr_1[$i];
    for($j=0;$j<count($arr_2);$j++){
        if($ele == $arr_2[$j]){
            array_push($arr_1_same,$ele);
            break;
        }else{
            if($j == count($arr_2)-1){
                array_push($arr_1_diff,$ele);
            }
        }
    }
}
print_r($arr_1_same);
print_r($arr_1_diff);


