<?php
$s = "Lorem ipsum dolor sit amet";
$o = [];

$x = str_split($s);

for($i=count($x)-1;$i>=0;$i--){
    $var = $x[$i];
    array_push($o,$var);
}
$o_str = implode($o);

print_r($o_str);


