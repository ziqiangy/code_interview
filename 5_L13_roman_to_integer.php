<?php
//Roman number to integer
//Leetcode string - #13 roman to integer
//I to 1
//V to 5
//X to 10

$input = "VII";

$ref = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

$input_arr = str_split($input);

$calc = 0;
for($i=0;$i<count($input_arr)-1;$i++){
if($ref[$input_arr[$i]]<$ref[$input_arr[$i+1]]){
    $calc = $calc - $ref[$input_arr[$i]];
}else{
    $calc = $calc + $ref[$input_arr[$i]];
}
}
print_r($calc + $ref[$input_arr[count($input_arr)-1]]);




