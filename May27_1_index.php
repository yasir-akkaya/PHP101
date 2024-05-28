<?php

// trigger_error("This is an error", E_USER_ERROR);

// echo 1;

echo '<pre>';
print_r(scandir(__DIR__));
echo '</pre>';

// mkdir('denemeDir/altDenemeDir',recursive:true);

// rmdir('denemeDir/altDenemeDir');

// rmdir('denemeDir');

// if (file_exists('file.txt')) {
//     echo filesize('file.txt') . '<br>';
    
//     file_put_contents('file.txt', 'Hello World');
//     clearstatcache();
//     echo filesize('file.txt');

// } else {
//     echo "Fİle does not exist";
// }

if (('file.txt')) {
    echo file_get_contents('file.txt');
    
} else {
    echo "File does not exist";
}

// if(file_exists('file.txt')) {
//     $file=fopen('file.txt', 'r');
// } else {
//     echo "File does not exist";
//     return;
// }

// while(($line = fgets($file))!==false) {
//     echo $line . '<br>';
// }
// fclose($file);

file_put_contents('file.txt', 'Hello World', FILE_APPEND);

print_r( pathinfo('file.txt'));