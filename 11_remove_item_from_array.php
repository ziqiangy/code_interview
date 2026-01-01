<?php
$arr = [5,3,7,1,23,12,13,9,2,2];

//from index=2, delete 1 item.
array_splice($arr,2,1);

//delete by key, here key is 1
// unset($arr[1]);
print_r($arr);
