<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>CodePen - Login</title>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

<html lang="en-US">
<head>

    <meta charset="utf-8">

    <title>Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body style="background-color: cadetblue" bgproperties="inherit">

<div class="container">

    <div id="login">

        <form name="form1" action="" method="post">

            <fieldset class="clearfix">

                <p><span class="fontawesome-user"></span><input style="background-color: whitesmoke" type="text" placeholder="fullname" name="t1" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-user"></span><input type="text" placeholder="publication_name" style="background-color: whitesmoke" name="t2" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-user"></span><input type="text" placeholder="address" name="t3" style="background-color: whitesmoke" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-user"></span><input type="text" placeholder="city" name="t4"  style="background-color: whitesmoke" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-user"></span><input type="text" placeholder="pincode" name="t5" style="background-color: whitesmoke" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p> <select name="s1" style="height: 50px; width: 374px; padding-left: 30px">
                    <option>select nearest area</option>
                    <?php
                    $res=mysqli_query($link,"select * from rajkot_area");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo "<option>";
                        echo $row["area"];
                        echo "</option>";
                    }
                    ?>


                </select></p>
                <p><span class="fontawesome-user"></span><input type="text" placeholder="contact_no" style="background-color: whitesmoke" name="t6" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-user"></span><input type="text" placeholder="email" style="background-color: whitesmoke" name="t7" required></p>
                <p><span class="fontawesome-user"></span><input type="text" placeholder="username" style="background-color: whitesmoke" name="t8" required></p>
                <p><span class="fontawesome-user"></span><input type="text" placeholder="password" style="background-color: whitesmoke" name="t9" required></p>

                <p><input type="submit" name="submit1" style="background-color:#ff851d " value="Registration"></p>

            </fieldset>

        </form>



    </div> <!-- end login -->

</div>
<?php
if(isset($_POST["submit1"]))
{
    mysqli_connect("localhost","root","");
    mysqli_select_db("registration");
    mysqli_query("insert into registration1 values('','$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[uname]','$_POST[pwd]','$_POST[email]')");

    ?>
    <script type="text/javascript">
        alert("registration successfully");
    </script>

    <?php



}


?>
</body>
</html>

</body>

</html>