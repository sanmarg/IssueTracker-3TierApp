<?php
$db_url = getenv('DB_URL');
$db_username = getenv('DB_USERNAME');
$db_password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');

$con=mysqli_connect($db_url, $db_username, $db_password, $db_name);
if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
}
?>
