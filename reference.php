<?php
$reference = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$r = "Lorem ipsum dolor sit amet";

//string methods
$length = strlen($r);
print "1. The String length is $length \n";
$substr = substr($r, 12, 6);
print "2. The substr from index 12, count length of 6 is $substr \n";
$str_rep = preg_replace("/dolor/","google",$r);
print "3. Replace dolor to google: $str_rep \n";
$str_pos = strpos($r, "sit");
print "4. The position of sit in string is at $str_pos \n";
$str_explode = explode(" ", $r);
print_r($str_explode);


//array methods

$array = ["apple","banana","cherry"];
array_push($array, "orange","banana");//add to last
array_pop($array);//remove last
array_shift($array);//remove first
array_unshift($array,"water melon","pear","grape");//add items at beginning
$merged_arr = array_merge($array,$str_explode,$array,$str_explode);//merges one or more array
print_r($merged_arr);
print in_array("sit",$merged_arr);//check if a value exists in an array, return 1 if exist

//array sort

// sort(), rsort(), asort(), arsort(), ksort(), krsort()

print "\n";
//foreach
$array = ["apple","banana","cherry"];
foreach($array as $fruit){
    print $fruit."\n";
}

//foreach ($array_expression as $key => $value) {}

foreach($array as $key=>$value){
    print $key." ".$value."\n";
}