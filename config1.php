<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "info";


$conn = mysqli_connect($server,$username,$password,$database);
if ($conn){
    echo "success";
    
}
else{
    die("Error".mysqli_connect_error());
}

?>