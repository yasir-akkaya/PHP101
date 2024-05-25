<?php
//datetime ve timezones

$currentTime= time();
//5 gün sonrası
echo $currentTime+5*60*60*24*5 . "<br>";



echo date("m/d/Y g:ia") . "<br>";

echo date("m/d/y G:i:s", $currentTime+60*60*24*5) . "<br>";

echo strtotime('2021-08-24 01:05:00') . "<br>"; 


echo date("m/d/y G:i:s", strtotime('second wednesday of november 2020')) . "<br>";

