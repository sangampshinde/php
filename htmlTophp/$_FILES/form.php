<?php
echo"<pre>";
print_r($_FILES);

// Array
// (
//     [input_file] => Array
//         (
//             [name] => dhara payment.pdf
//             [full_path] => dhara payment.pdf
//             [type] => application/pdf
//             [tmp_name] => C:\xampp\tmp\phpE0B.tmp
//             [error] => 0
//             [size] => 88380
//         )

// )

print_r($_FILES['input_file']);

// Array
// (
//     [name] => dhara payment.pdf
//     [full_path] => dhara payment.pdf
//     [type] => application/pdf
//     [tmp_name] => C:\xampp\tmp\php6C7F.tmp
//     [error] => 0
//     [size] => 88380
// )

// extract the filename and all other properties

if($_FILES['input_file']){

    echo"<pre>";
    $path = $_FILES['input_file']['name'];
    echo $path;

    // dhara payment.pdf


}

// upload file 

if($_FILES['input_file']){

    echo"<pre>";
    $file_name = $_FILES['input_file']['name'];
    $upload_path ="./Upload/".$file_name;
    echo $upload_path;
    // move_upload_file()==> function wich upload file on mention location.(file path , upload file location)
    move_uploaded_file($_FILES["input_file"]["tmp_name"], $upload_path)|| die("failed to upload");
    echo "<br>";
    echo"file uploaded";
}else{
    die("no file found");
}
?>
