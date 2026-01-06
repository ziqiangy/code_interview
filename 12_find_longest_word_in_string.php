<?php
$string = "fun&!! time";

// 1. Keep only basic English letters (ASCII)
$res_ascii = preg_replace("/[^a-zA-Z]/", " ", $string);

$output_string = preg_replace('/\s+/', ' ', $res_ascii);
$arr = explode(" ",$output_string);


$max = array_shift($arr);



for($i=0;$i<count($arr);$i++){
if(strlen($max)<strlen($arr[$i])){
    $max = $arr[$i];
}
}

print_r($max);

