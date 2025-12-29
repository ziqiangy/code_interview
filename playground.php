<?php
//merge the sorted array
$nums1 = [1,2,3,0,0,0]; $m = 3; $nums2 = [2,5,6]; $n = 3;


$new_nums = [];
for($i=0;$i<$m;$i++){
    array_push($new_nums,$nums1[$i]);
}

for($j=0;$j<$n;$j++){
        array_push($new_nums,$nums2[$j]);
    }


    sort($new_nums);

    print_r($new_nums);

// for($k=0;$k<count($new_sorted);$k++){

//     $op = $new_sorted[$k];
//     print $op."\n";
// }


