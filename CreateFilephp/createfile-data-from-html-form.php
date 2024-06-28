<form method="post">
    <input type="text" placeholder="Enter file name" name="file_name">
    <br><br>
    <textarea name="content"></textarea>
    <br><br>
    <button>Create File</button>
</form>
<?php

if(isset($_POST['file_name'])) {

$filename = "Files/".$_POST['file_name'];
$content = $_POST['content'];

$file = fopen($filename, "w");

fwrite($file, $content);

fclose($file);

echo"file created";


}
















?>