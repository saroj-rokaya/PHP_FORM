<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_form";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo "Connection success";
}
else{
    echo "Connection failed".mysqli_connect_error();
}
?>