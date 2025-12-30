<?php

$strs = ["flower","flow","flight"];
for($i=0;$i<count($strs);$i++){
    for($j=0;$j<strlen($strs[$i]);$j++){
        print $strs[$i][$j];
    }
}