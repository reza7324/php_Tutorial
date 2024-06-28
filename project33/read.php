<?php

// $file = fopen("log.txt", "w");

// fwrite($file, "php... laravel");

$file = fopen("log.txt", "r");

// $content = fread($file, 5);
$content = fread($file, filesize("log.txt"));

echo filesize("log.txt"); #alls the content of the log file
echo $content;

fclose($file);




// echo file_get_contents("log.txt"); #fopen fread fclose

