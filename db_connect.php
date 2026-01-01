<?php
$conn = new mysqli("localhost","root","","school_db");
if ($conn->connect_error){
    die("connection failed:".
    $conn->connect_error);
}
//echo "Database connected successfully";
?>