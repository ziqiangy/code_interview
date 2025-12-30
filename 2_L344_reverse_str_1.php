<?php

//swap two pointer
$s = "Lorem ipsum dolor sit amet";
$o = [];


$left = 0;
$right = strlen($s)-1;

while($left<$right){
    $tmp = $s[$left];
    $s[$left] = $s[$right];
    $s[$right] = $tmp;
    $left++;
    $right--;
}

print $s;



