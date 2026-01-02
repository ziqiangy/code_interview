<?php
//insertion sort
$arr = [5,3,7,1,23,12,13,9,2,2];
// $arr_sorted = array();
//  array_push($arr_sorted,$arr[0]);
// array_splice($arr,0,1);
//  for($i=0;$i<count($arr);$i++){
//     $ele = $arr[$i];
//     $length = count($arr_sorted);
//     for($j=0;$j<$length;$j++){
//         if($ele>$arr_sorted[$j] && $ele<=$arr_sorted[$j+1]){
//             array_splice($arr_sorted,$j+1,0,$ele);
//         }elseif($ele<$arr_sorted[$j] && $ele>=$arr_sorted[$j-1]){
//             array_splice($arr_sorted,$j,0,$ele);
//         }
//     }
// }

/**
 * magical idea to write this
 */
$arr = [5,3,7,1,23,12,13,9,2,2];

    for ($i = 1; $i < count($arr); $i++) {
        $j = $i - 1;
        $current = $arr[$i];
        while($j >= 0 && $arr[$j] > $current) {
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $current;
    }
print_r($arr);