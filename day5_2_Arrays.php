<?php

include "help.php";

$items = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

prettyArr(array_chunk($items, 2, true));

$arr1 = ['a', 'b', 'c'];
$arr2 = [10, 20, 30];

prettyArr(array_combine($arr1, $arr2));

prettyArr(array_keys($items));

$myMappedArr = array_map(fn($e) => $e * 4, $items);

prettyArr($myMappedArr);

$arr3 = [77, 85, 183];
prettyArr(array_map(fn($e1, $e2) => $e1 + $e2, $arr2, $arr3));

$unionArr = array_merge($arr2, $arr3, $arr1);
prettyArr($unionArr);

$products = [
    ['price' => 10.55, 'qty' => 2, 'desc' => 'Product 1'],
    ['price' => 20.99, 'qty' => 5, 'desc' => 'Product 2'],
    ['price' => 15.29, 'qty' => 3, 'desc' => 'Product 3'],
    ['price' => 8.99, 'qty' => 1, 'desc' => 'Product 4'],
    ['price' => 12.99, 'qty' => 4, 'desc' => 'Product 5']
];

$total = array_reduce($products, fn($sum, $item) => $item['price'] * $item['qty'] + $sum, 0);
echo $total . "<br>";

usort($items, fn($a, $b) => $a <=> $b);
prettyArr($items);


$numbers = [3, 2, 5, 1, 4];

$strings = ["apple", "banana", "cherry", "date"];


usort($strings, fn($a,$b)=>strlen($a)-strlen($b));

prettyArr($strings);

$array=[1,2,3,4,5];
[$a,$b,$c,$d,$e]=$array;
echo $a . ", " . $b . ", " . $c . ", " . $d . ", " . $e . "<br>";