<?php
$con=mysqli_connect("localhost", "phpmyadmin", "password", "Issue Tracker");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
?>