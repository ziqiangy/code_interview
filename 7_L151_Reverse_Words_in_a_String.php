<?php
//L151_Reverse_Words_in_a_String
$s = "the sky is blue";
$counter = 0;
$left = 0;
$right = 0;
$arr_word = array();
$arr_sen = array();
for($i=0;$i<strlen($s);$i++){
    if($s[$i]!=" "){
        $counter++;
        array_push($arr_word,$s[$i]);
    }
    if(($s[$i]==" " || $i == strlen($s) -1 )&& $counter>0){
        array_push($arr_sen,implode($arr_word));
        $arr_word = array();
        $counter =0;

    }
}
$arr_sen_rev = array();
for($i=count($arr_sen)-1;$i>-1;$i--){
    array_push($arr_sen_rev, $arr_sen[$i]);
}
print_r(implode(" ",$arr_sen_rev));
