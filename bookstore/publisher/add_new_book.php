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

?>


<div class="wrapper push-wrapper">


    <header id="header">


        <?php
        include "header.php";
        ?>

        <?php
        //  include "banner.php";
        ?>

    </header>

    <main class="main-content">


        <section class="upcoming-release">



        </section

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: blue">
                    <form action="" method="post" name="f1" enctype="multipart/form-data">
                        Add New Books
                        <table style="border: solid">
                            <tr>
                                <td>Enter Book Category</td>
                                <td><select name="s1" style="height: 50px; width: 250px">
                                        <?php
                                        $res=mysqli_query($link,"select * from book_category");
                                        while($row=mysqli_fetch_array($res))
                                        {
                                            echo "<option>";
                                            echo $row["book_category"];
                                            echo "</option>";
                                        }
                                        ?>

                                    </select></td>
                            </tr>
                            <tr>
                                <td>Enter Book Name</td>
                                <td><input type="text" name="t1"></td>
                            </tr>
                            <tr>
                                <td>Enter Book Image</td>
                                <td><input type="file" name="t2"></td>
                            </tr>
                            <tr>
                                <td>Enter Author name</td>
                                <td><input type="text" name="t3"></td>
                            </tr>
                            <tr>
                                <td>Enter Book Overview</td>
                                <td><input type="text" name="t6"></td>
                            </tr>
                            <tr>
                                <td>Enter Price</td>
                                <td><input type="text" name="t4"></td>
                            </tr>
                            <tr>
                                <td>Enter Quantity</td>
                                <td><input type="text" name="t5"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="submit" name="submit1" value="Add Book" style="background-color: #ff851d"></td>
                            </tr>
                        </table>

                    </form>
                    <?php
                    if(isset($_POST["submit1"]))
                    {
                        $a=rand(1111,9999);
                        $b=rand(1111,9999);
                        $r=$a.$b;
                        $t=$r.time();
                        $t1=md5(md5($t));
                        $fnm=$_FILES["t2"]["name"];
                        $dst="../publisher/img/".$t1.$fnm;
                        $dst1="img/".$t1.$fnm;
                        move_uploaded_file($_FILES["t2"]["tmp_name"],$dst);
                        mysqli_query($link,"insert into book_details values ('','$_POST[s1]','$_POST[t1]','$_SESSION[id1]','$dst1','$_POST[t3]','$_POST[t6]','$_POST[t4]','$_POST[t5]')");
                        ?>
                        <script type="text/javascript">
                            alert("Book Added Successfully!!!");
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

</html>