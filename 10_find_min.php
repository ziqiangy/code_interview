<?php
//find min
$arr = [5,3,7,1,23,12,13,9,2,2];
$min = array_shift($arr);



for($i=0;$i<count($arr);$i++){
if($min>$arr[$i]){
    $min = $arr[$i];
}
}
print $min;

