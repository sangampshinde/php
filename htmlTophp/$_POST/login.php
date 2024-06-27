<?php
// print data from of array
print_r($_POST);
echo "<br>";
// normal data prrint from 
// echo "this is login file";
// echo "<br>";
// echo "username : ".$_POST["user_name"];
// echo "<br>";
// echo "password : ".$_POST["user_pass"];
// echo "<br>";
// echo "email : ".$_POST["user_email"];





if($_POST){
echo "username : ".$_POST["user_name"];
echo "<br>";
echo "password : ".$_POST["user_pass"];
echo "<br>";
echo "email : ".$_POST["user_email"];
}
?>