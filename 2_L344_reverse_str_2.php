<?php
$s = "Lorem ipsum dolor sit amet";
$o = [];


for($i=strlen($s)-1;$i>-1;$i--){
    array_push($o,$s[$i]);
}
$o_str = implode($o);

print_r($o_str);




