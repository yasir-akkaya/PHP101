<?php

if (true) {
    function test()
    {
        echo "test";
    }
}

// var_dump(test());

//iç içe fonksiyon çağrımı:

test2();
test3();

function test2()
{
    echo "test2";
    function test3()
    {
        echo "test3";
    }
}

function foo(): int|float
{
    return 1;
}

echo foo();
echo "<hr>";

function sum(int $x, int $y): int
{
    if ($x == 2) {
        $x++;
    }
    return $x + $y;
}
echo sum(2, 2);
echo '<hr>';
function sum_3(int $x, int $y, int ...$numbers): int
{
    return $x + $y + array_sum($numbers);
}


$numbers_array = [2, 2, 6, 6, 6, 3, 77];

// echo sum_3($a, $b, ...$numbers_array);

function named_mode(int $x, int $y): int
{
    if($x%$y===0){
        return $x/$y;
    }
    return $x;
}
$a = 88;
$b = 8;
echo named_mode(y:$b,x:$a);

