<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="name">
        <br><br>
        <button name="button" value="set">set</button>
        <br><br>
        <button name="button" value="get">display</button>
        <br><br>
        <button name="button" value="delete">delete</button>
    </form>
    <?php

    session_start();

    if(isset($_POST['button'])){

        if($_POST['button'] == 'set'){
            $val = $_POST['name'];
            $_SESSION['name'] = $val;
            echo "session set ";
        }

        if($_POST['button'] == 'get'){
           
            echo $_SESSION['name'];
             
        }

        if($_POST['button'] == 'delete'){
            session_destroy();
           
            
             
        }













    }











    ?>
    </form>
    
</body>
</html>