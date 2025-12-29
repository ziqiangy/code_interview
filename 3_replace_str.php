<?php
//3_replace_space
//space => %20
$s = "Lorem ipsum dolor sit amet";
$ss = str_split($s);
$o = [];
for($i=0;$i<strlen($s);$i++){
    if($ss[$i]==" "){
        array_push($o,"%20");
    }else{
        array_push($o,$ss[$i]);
    }
}


$str_o = implode($o);

print($str_o);