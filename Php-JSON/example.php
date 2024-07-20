<?php
$user =["name"=>"John", "email"=>"John@example.com", "password"=>"1234"];
$user_json=json_encode($user);
echo $user_json;

$data='{"name":"John","email":"John@example.com","password":"1234"}';
$dataArray =json_decode($user_json,true);
echo "<br>";
print_r($dataArray);






?>