<?php

$metin = "Merhaba Dünya";
$sayi = 1907;
echo $metin, "<br>", $sayi;

// $this="Bu bir hata mesajıdır";
// echo $this;

echo "<br>";
$x=1;
$y=$x;

$x=2;
echo $y;

$a="İlk mesaj";
$b=&$a;

$a="Gğncel Mesaj";

echo "{$a}";

echo "<br>";

$var ="name";
$$var="Yasir"; 
echo "$name";

define("url","www.google.com");

echo "<br>";
echo url;
echo defined("url");
echo "<br>";
echo PHP_VERSION;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;

echo gettype($a);

?>

<!-- <!DOCTYPE html>
<html>
    <body>
        <h1>
            <?=  "Deneme"; ?>
            </h1>
        <p>PHP kodu içeren bir HTML sayfası</p>
    </body>
</html>
 -->





