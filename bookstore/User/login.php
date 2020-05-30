<?php
session_start();
$username=$_GET["username"];
$password=$_GET["password"];
include "conn.php";
$count = 0;
$r = mysqli_query($link,"select * from user_registration where username='$username' && password='$password' && status='YES'");
$count = mysqli_num_rows($r);

if ($count > 0)
{
    $_SESSION["username"]=$username;
    echo "found";
}
else
{
    echo "notfound" ;
}
?>


