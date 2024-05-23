<?php

//Arrayler:

$programmingLanguages = ["Python", "Java", "C#", "PHP", "JavaScript"];
$programmingLanguages[5] = "C++";
foreach ($programmingLanguages as $lang) {
    echo $lang, "<br>";
}
echo count($programmingLanguages),"<hr>";

$x=3;
$y=3;

echo $x===$y ? "Eşittir" : "Eşit Değildir";
echo $x!=$y ? "Eşittir" : "Eşit Değildir";

$a=null;

$b= $a ?? "Boş" ;
echo $b;

