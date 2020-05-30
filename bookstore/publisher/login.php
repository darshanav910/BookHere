<?php
session_start();
$username=$_GET["username"];
$password=$_GET["password"];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
$count = 0;
$r = mysqli_query($link,"select * from publication_registration where username='$username' && password='$password' && status='y'");
$count = mysqli_num_rows($r);

if ($count > 0)
{

    $_SESSION["username1"]=$username;
    while($row=mysqli_fetch_array($r))
    {
        $_SESSION["id1"]=$row["id"];
    }
    echo "found";
}
else
{
    echo "notfound";
}
?>


