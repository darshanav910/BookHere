<?php
session_start();
include "conn.php";

$res=mysqli_query($link,"select * from user_registration where username='$_SESSION[username]'");
while($row=mysqli_fetch_array($res))
{
    mysqli_query($link,"insert into order1 values('','$row[fullname]','$row[fullname]','$row[username]','$row[contact_no]','$row[email]')");
}


$res=mysqli_query($link,"select * from order1 order by id desc limit 1");
while($row=mysqli_fetch_array($res)) {
$id=$row["id"];
}


$res=mysqli_query($link,"select * from cart where username='$_SESSION[username]'");
while($row=mysqli_fetch_array($res))
{
    mysqli_query($link,"insert into order_details values('','$id','$row[id]')");
}

mysqli_query($link,"delete from cart where username='$_SESSION[username]'");

?>

<h1>Your order generate successfully</h1>

<script type="text/javascript">
    setTimeout(function(){
        window.location="demo.php";


    },3000);


    </script>

