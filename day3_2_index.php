<?php

$i=0;
while(true){
    while($i>15){
        break 2;
    }
    echo $i++ . "<br>";
}
echo "<hr>";

$string="Hello World";

for ($i=0; $i <strlen($string) ; $i++) { 
    echo $string[$i] ."<br>";
}
echo "<hr>";

$array_1=[1,2,3,4,5,6,7,8,9,10];
echo json_encode($array_1);
$variable='value';
switch ($variable) {
    case 'value':
        echo "Value is matched in switch";
        break;
    
    default:
        echo "Value is not matched in switch";
        break;
}

$result= match($variable){
    'value' => "Value is matched in match",
    default => "Value is not matched in match"
};