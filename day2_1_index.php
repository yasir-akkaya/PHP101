<?php
// Veri Tipleri
$status = false;
$number = 10;
$floatNumber = 10.5;
$text = "Hello World";

echo $status, "<br>";
echo $number, "<br>";
echo $floatNumber, "<br>";
echo $text, "<br>";

echo getType($status), "<br>";
echo getType($number), "<br>";
echo getType($floatNumber), "<br>";
echo getType($text), "<br>";

var_dump($status);
echo "<hr>";

$array_1 = [1, 2, 3, 4, 5];
$array_2 = array(1, 2, 3, 4, -77.2, "Hello World", true);

print_r($array_1);

foreach ($array_2 as $item) {
    echo $item, "<br>";
}


echo "<br>", $array_1[0], "<hr>";

function sum($number1, $number2)
{
    return $number1 + $number2;
}
echo sum(10, "10"), "<hr>";

$isComplete = false;
// if ($isComplete) {
//     echo "Is Complete";
// } else {
//     echo "Is Not Complete";
// }
echo is_bool($isComplete), "<br>";

echo log(-1), "<hr>";
$fistName= "Yasir";
$lastName="Akaya";
$fullName=$fistName." ".$lastName;
echo $fullName;