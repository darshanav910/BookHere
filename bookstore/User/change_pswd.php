<?php
session_start();
if(!isset($_SESSION["username"]))
{
    ?>

    <script type="text/javascript">
        window.location="demo.php";
    </script>
    <?php

}
include "conn.php";

?>





<div class="wrapper push-wrapper">


    <header id="header">


        <?php
            include "header.php";
        ?>

        <?php
            //include "banner.php";
        ?>

    </header>

    <main class="main-content">


        <section class="upcoming-release">



        </section>

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: blue">



                    <form name="form1" action="" method="post">
                        <table>
                            <tr>
                                <td>old password:<td><input type="password" name="t2" id="t2" required title="please enter valid password" pattern="[A-Za-z0-9@#!]+"></td></td>
                            </tr>

                            <tr>
                                <td>new password:<td><input type="password" name="t3" id="t3" required title="please enter valid password" pattern="[A-Za-z0-9@#!]+"></td></td>
                            </tr>

                            <tr>
                                <td>confirm password:<td><input type="password" name="t4" id="t4" required title="please enter valid password" pattern="[A-Za-z0-9@#!]+"></td></td>
                            </tr>

                            <tr>
                                <td><input type="submit" class="btn-1 sm shadow-0 "  value="submit" name="t5" id="t5" ></td>
                                <td align="center"><input type="submit" style="width: 100px; float: right"  class="btn-1 sm shadow-0 " name="submit2" value="Back"></td>
                            </tr>
                        </table>
                    </form>
                    <?php

                    $link=mysqli_connect("localhost","root","");
                    mysqli_select_db($link,"book_here");
                    if(isset($_POST["t5"])) {
                        $password = $_POST['t2'];
                        $newpassword = $_POST['t3'];
                        $confirmnewpassword = $_POST['t4'];
                        $count = 0;
                        $result = mysqli_query($link, "SELECT password FROM user_registration WHERE  password='$password' AND username='$_SESSION[username]'");
                        $count = mysqli_num_rows($result);

                        if ($count == 0) {
                            echo "old password not match";
                        } else {
                            if ($newpassword == $confirmnewpassword) {
                                mysqli_query($link, "UPDATE user_registration SET password='$newpassword' where password='$password' AND username='$_SESSION[username]'  ");


                                ?>
                                <script type="text/javascript">
                                    window.location="demo.php";
                                    alert("password changed successfully")
                                </script>
                                <?php
                            } else {
                                echo "new and confirm new password not match";
                            }

                        }

                    }
                    if(isset($_POST['submit2']))
                    {
                        ?>
                        <script type="text/javascript">
                            window.location="demo.php";

                        </script>
                        <?php
                    }


                    ?>



                </div>
            </div>
        </section>

        <?php
            //include "recomended.php";
        ?>

        <?php
           //include "book_collection.php";
        ?>
        <?php
            //include "bookrelated_products.php";
        ?>

    </main>

    <?php
    include "footer.php";
    ?>

</div>

