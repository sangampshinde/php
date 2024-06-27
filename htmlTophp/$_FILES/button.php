<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button name="button">click</button>
    </form>
    
</body>
</html>

<?php

// isset() see your request going or not going
if(isset($_POST['button'])){
    btn_click();

};
function btn_click(){
    echo"function btn_click called  with button click";
};

// this code handles the both type of request...
if(isset($_REQUEST['button'])){
    btn_click(); 
};
function btn_click1(){
    echo"function btn_click called  with button click";
};











?>