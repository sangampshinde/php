<?php

$filename = "../Files/data.txt";

$fileopen = fopen($filename,"r")or die("unable read");//it takes two parameters (filename , method for file[read,write,update])

$data =fread($fileopen, filesize($filename));// it takes two parameters (opened_file_variable ,filesize());

echo $data;

fclose($fileopen);












?>