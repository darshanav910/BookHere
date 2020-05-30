<?php
session_start();
include "conn.php";
if(!isset($_SESSION["username"]))
{
    ?>

    <script type="text/javascript">
        window.location="demo.php";
    </script>
<?php

}


?>







<div class="wrapper push-wrapper">


    <header id="header">


        <?php
            include "header.php";
        ?>

        <?php
           // include "banner.php";
        ?>

    </header>

    <main class="upcoming-release">


        <section class="upcoming-release">



        </section>

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: blue">






                    <form action="" method="post">
                        <?php

                     $r=mysqli_query($link,"select * from user_registration where username='$_SESSION[username]'") or die(mysqli_error($link));
                    while($row=mysqli_fetch_array($r))
                    {

                        $fn=$row['fullname'];
                        $e=$row['email'];
                        $cn=$row['contact_no'];
                        $gn=$row['username'];
                        $s=$row['status'];

                    }
                    ?>

                    <table style="background-color: white;">

                            <tr>
                                <td align="center" style="width: 150px">Fullname</td>
                                <td><input type="text" value='<?php echo $fn; ?>' name="t2"><br></td>
                            </tr>

                        <tr>
                            <td  align="center" style="width: 150px">Username</td>
                            <td><input type="text" value='<?php echo $gn; ?>' name="t5"><br></td>
                        </tr>
                            <tr>
                                <td align="center" style="width: 150px">Email id</td>
                                <td><input type="text" value='<?php echo $e; ?>' name="t3"><br></td>
                            </tr>

                            <tr>
                                <td align="center" style="width: 150px">Contact_no</td>
                                <td><input type="text" value='<?php echo $cn; ?>' name="t4"><br></td>
                            </tr>





                            <tr>
                                <td align="center"><input type="submit" style="width: 100px"  class="btn-1 sm shadow-0 " name="submit1" value="Update"><br></td>
                                <td align="center"><input type="submit" style="width: 100px;"  class="btn-1 sm shadow-0 " name="submit2" value="Back"><br></td>
                            </tr>
                        </table>



                    </form>
                    <?php
                    if(isset($_POST['submit1']))
                    {
                        mysqli_query($link,"update user_registration set fullname='$_POST[t2]',email='$_POST[t3]',contact_no='$_POST[t4]',username='$_POST[t5]' where username='$_SESSION[username]'");
                        ?>
                        <script type="text/javascript">
                            window.location="demo.php";
                            alert("Record Updated successfully")
                        </script>
                        <?php

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
                    </body>
                    </html>

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

</html>