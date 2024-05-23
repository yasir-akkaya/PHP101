<?php

$cond_1=true;
$cond_2=false;
$cond_3=true;

if($cond_1 xor $cond_3){
    echo "cond is true";
}

$x="Hello";
$y= "World";

// echo var_dump($x & $y);

$array_1 = ['a'=>1,'b'=>2,'c'=>3];
$array_2 = ['d'=>4,'e'=>5,"f"=>6,"g"=>7,"h"=>8];

$array_3= $array_1 + $array_2;
echo "<pre>";
print_r($array_3);
echo "</pre>"; 

