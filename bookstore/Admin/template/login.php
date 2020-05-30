<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Untitled Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<div  style="height: 100px; width: 350px; border: solid; border-color: cadetblue; margin-left: 500px; margin-top: 250px">

<form name="form1" action="" method="post">
    <table>

        <tr>
            <td>Username:<td><input type="text" name="t1"></td></td>
        </tr>

        <tr>
            <td>password:<td><input type="password" name="t2"></td></td>
        </tr>

        <tr>
            <td><td><input type="submit" name="t3" value="submit"></td></td>
        </tr>

</form>
    </div>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
if(isset($_POST["t3"]))
{
    $count=0;
    $res=mysqli_query($link,"select * from admin where username='$_POST[t1]' && password='$_POST[t2]'");
    $count=mysqli_num_rows($res);
    if($count>0)
    {
        $_SESSION["user"]=$_POST["t1"];

        ?>
        <script type="text/javascript">
            window.location="demo.php";
        </script>
        <?php
    }
    else
    {
        echo "you have entered invalid username and password";
    }
}
?>


</body>
</html>
