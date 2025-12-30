<?php
//6_L58_length_of_lastword


$s = "   fly me   to   the moon  ";
$s_arr = str_split($s);
$counter = 0;
for($i=count($s_arr)-1;$i>-1;$i--){
    if($s_arr[$i]!=" "){
        $counter++;
    }
    if($s_arr[$i]==" "&& $counter>0){
        break;
    }
}
print $counter;