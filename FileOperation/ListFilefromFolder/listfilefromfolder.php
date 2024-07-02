<?php
$path="Files";
// toscan directory use function called scandir()
$item=scandir($path);
print_r($item);
// Array ( [0] => . [1] => .. [2] => data.txt [3] => dummy.txt [4] => test )
$item=array_diff($item,array(".",".."));
echo"<br>";
print_r($item);
//Array ( [2] => data.txt [3] => dummy.txt [4] => test )









?>