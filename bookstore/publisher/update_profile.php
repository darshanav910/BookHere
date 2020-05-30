<?php
session_start();
if(!isset($_SESSION["username1"]))
{
    ?>

    <script type="text/javascript">
        window.location="demo.php";
    </script>
    <?php

}
include "conn.php";

$r=mysqli_query($link,"select * from publication_registration where username='$_SESSION[username1]'") or die(mysqli_error($link));
while($row=mysqli_fetch_array($r))
{
    $fn=$row['fullname'];
    $pn=$row['publication_name'];
    $pa=$row['address'];
    $c=$row['city'];
    $pc=$row['pincode'];
    $e=$row['email'];
    $cn=$row['contact_no'];
    $un=$row['username'];


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
            <div class="container"><h2 style="color: #ff851d">Edit Profile</h2>
                <div class="row" style="font-size:27px; color: blue ; margin-top: 50px">





                    <form action="" method="post">

                        <table style="background-color: white">

                            <tr>
                                <td>Full Name</td>
                                <td><input type="text" style="color: black"  value='<?php echo $fn; ?>' name="t1"><br></td>
                            </tr>
                            <tr>
                                <td>Publication Name</td>
                                <td><input type="text" style="color: black" value='<?php echo $pn; ?>' name="t2"><br></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><input type="text" style="color: black" value='<?php echo $pa; ?>' name="t3"><br></td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td><input type="text"  style="color: black" style="color: black" value='<?php echo $c; ?>' name="t4"><br></td>
                            </tr>
                            <tr>
                                <td>Pincode</td>
                                <td><input type="text" style="color: black" value='<?php echo $pc; ?>' name="t5"><br></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input type="text" style="color: black" value='<?php echo $un; ?>' name="t8"><br></td>
                            </tr>

                            <tr>
                                <td>Contact_no</td>
                                <td><input type="text" style="color: black" value='<?php echo $cn; ?>' name="t6"><br></td>
                            </tr>

                            <tr>
                                <td>Email id</td>
                                <td><input type="text" style="color: black" value='<?php echo $e; ?>' name="t7"><br></td>
                            </tr>







                            <tr>
                                <td align="center"><input style="color: black" type="submit" class="btn-1 sm shadow-0 " name="submit1" value="submit"><br></td>
                            </tr>
                        </table>



                    </form>
                    <?php
                    if(isset($_POST['submit1']))
                    {
                        mysqli_query($link,"update publication_registration set fullname='$_POST[t1]',username='$_POST[t8]',publication_name='$_POST[t2]',address='$_POST[t3]',city='$_POST[t4]',pincode='$_POST[t5]',contact_no='$_POST[t6]',email='$_POST[t7]' where username='$_SESSION[username1]'");
                        ?><script type="text/javascript">window.location="demo.php";
                        alert("Record Updated Successfully!!!");
                        </script><?php
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
          // include "book_collection.php";
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