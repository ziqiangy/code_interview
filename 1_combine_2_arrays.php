<?php
$a = [1,2,3,5,0,0];
$b = [5,2,7,10];

for( $i=0; $i<count($b); $i++){
    array_push($a,$b[$i]);
}

//print array manually
for($i=0;$i<count($a);$i++){
    $o=$a[$i];
    print $o."\n";
}

