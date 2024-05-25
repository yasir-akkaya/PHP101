<?php

// $x = 5;

// function foo( ) {
//    $GLOBALS['x']++;
//     return $GLOBALS['x'];
// }

// echo foo();

function func_1()
{
    static $value = null;
    if ($value === null) {
        $value = func_2();
    }
    return $value;
}

function func_2()
{
    sleep(3);
    echo "func_2 called\n";
    return 10;
}

// echo func_1();
// echo func_1();
// echo func_1();


function sum(int|float ...$numbers): int|float
{
    return array_sum($numbers);
}

$x = 'sub';

if (is_callable($x)) {
    echo $x(1, 2, 3, 4, 5);
} else {
    echo 'not callable';
}


// function multipe($i){
//     return $i*2;
// }

// $anonymus= function (callable $callback ,int|float ...$numbers): int|float {
//   return $callback(array_sum($numbers));  
// };

// print_r ($anonymus('multiple',1,2,3,4,5));
echo '<hr>';

// $arr=[1,2,3,4,5];

// $arr_2= array_map(function($i){
//     return $i*2;
// }, $arr);
// echo '<pre>';
// print_r ($arr_2);
// echo '<pre>';
function is_even($i)
{
    return $i % 2 == 0;
}
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr_2 = array_filter($arr, 'is_even');
print_r($arr_2);

echo '<hr>';

$arr3= array_map(fn($element)=>$element*$element, $arr);

echo '<pre>';
print_r ($arr3);
echo '<pre>';

