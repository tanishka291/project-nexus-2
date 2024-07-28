<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";
$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn){
    die ('server is not connected'.mysqli_connect_error());
}
// else{
//     echo "connection established successfully";
// }
?>