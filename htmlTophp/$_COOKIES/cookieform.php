<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="text" name="user_name" placeholder="username">
    <br><br>
    <button name="button" value="set">setcookie</button>   
    <br><br>
    <button  name="button" value="display">Display</button> 
    <br><br>
    <button  name="button" value="delete">Delete</button> 
    </form>
   
</body>
</html>


<?php
if(isset($_POST['button'])){
    if($_POST['button'] == "set"){
        $val= $_POST["user_name"];
        // echo $val;
        setcookie("user",$val,time()+ 60*60*24,"/");
        echo "<br>";
        echo "cookie set";
    }

    if($_POST['button'] == "display"){
        if(isset( $_COOKIE['user'])){
            echo $_COOKIE['user'];
        }
      }

      if($_POST['button'] == "delete"){
        if(isset($_COOKIE['user'])){
            setcookie("user", "", time() - 3600,"/");
            echo "<br>Cookie deleted";
        }
      }

    
      
}








?>