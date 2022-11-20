<?php

include "Database.php";

$id =  $_COOKIE['auth_user_id'];
$username = $_COOKIE['auth_username'];

$sql = "SELECT `user_id`,`username` FROM `user` WHERE user_id ='$id' AND username='$username';";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result)==0)
{
    echo "Unauthorized access!";
    exit;
}

?>