<?php

$strs = ["flower","flow","flight"];
$run=1;
for($i=0;$i<strlen($strs[0]);$i++){
    $prefix = $strs[0][$i];
    for($j=1;$j<count($strs);$j++){
        if($prefix!=$strs[$j][$i]){
            $run=0;
            break;
            
        }
    }
    if($run==0){
        break;
    }
}

$s = array();
for($k=0;$k<$i;$k++){
    array_push($s,$strs[0][$k]);
}

print implode($s);