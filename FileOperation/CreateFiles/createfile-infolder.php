<?php


$filename = "Files/dummy.txt";
$content = "this is a dummy file";

$file = fopen($filename, "w");

fwrite($file, $content);

fclose($file);

echo"file created";










?>