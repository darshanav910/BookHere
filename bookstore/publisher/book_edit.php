<?php
session_start();
//$id=$_SESSION['id'];
$a=$_GET['id'];
if(!isset($_SESSION["username1"]))
{
    ?>

    <script type="text/javascript">
        window.location="demo.php";
    </script>
    <?php

}
include "conn.php";

$r=mysqli_query($link,"select * from book_details where id='$a'") or die(mysqli_error($link));
while($row=mysqli_fetch_array($r))
{
    $bc=$row['book_category'];
    $bn=$row['bookname'];
    $bi=$row['book_image'];
    $an=$row['author_name'];
    $o=$row['overview'];
    $pc=$row['price'];
    $q=$row['quantity'];



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
                <div class="row" style="font-size:27px; color: blue; margin-top: 100px">





                    <form action="" method="post" enctype="multipart/form-data">
                        <table style="background-color: white">
                            <tr>
                                <?php
                                echo "<td>";
                                    ?> <img src="<?php echo $bi; ?>" height="100" width="100"> <?php
                                    echo "</td>";
                                ?>
                                    </tr>
                            <tr>
                                <td>book category</td>
                                <td><input type="text" style="color: black"  value='<?php echo $bc; ?>' name="t1"><br></td>
                            </tr>
                            <tr>
                                <td>book Name</td>
                                <td><input type="text" style="color: black" value='<?php echo $bn; ?>' name="t2"><br></td>
                            </tr>
                            <tr>
                                <td>book image</td>
                                <td><input type="file" style="color: black" value='<?php echo $bi; ?>' name="t3"><br></td>
                            </tr>
                            <tr>
                                <td>author name</td>
                                <td><input type="text"  style="color: black" style="color: black" value='<?php echo $an; ?>' name="t4"><br></td>
                            </tr>
                            <tr>
                                <td>overview</td>
                                <td><input type="text" style="color: black" value='<?php echo $o; ?>' name="t5"><br></td>
                            </tr>
                            <tr>
                                <td>price</td>
                                <td><input type="text" style="color: black" value='<?php echo $pc; ?>' name="t6"><br></td>
                            </tr>

                            <tr>
                                <td>quantity</td>
                                <td><input type="text" style="color: black" value='<?php echo $q; ?>' name="t7"><br></td>
                            </tr>







                            <tr>
                                <td align="center"><input style="color: black" type="submit" class="btn-1 sm shadow-0 " name="submit1" value="Edit Details"><br></td>
                            </tr>
                        </table>



                    </form>
                    <?php
                    if(isset($_POST['submit1']))
                    {
                        $a1=rand(1111,9999);
                        $b=rand(1111,9999);
                        $r=$a1.$b;
                        $t=$r.time();
                        $t1=md5(md5($t));
                        $fnm=$_FILES["t3"]["name"];
                        $dst="../publisher/img/".$t1.$fnm;
                        $dst1="img/".$t1.$fnm;
                        move_uploaded_file($_FILES["t3"]["tmp_name"],$dst);

                        mysqli_query($link,"update book_details set book_category='$_POST[t1]',bookname='$_POST[t2]',book_image='$dst1',author_name='$_POST[t4]',overview='$_POST[t5]',price='$_POST[t6]',quantity='$_POST[t7]' where id='$a'");
                        ?><script type="text/javascript">
                        alert("Record Updated Successfully!!!");
                        window.location="my_book1.php";</script><?php
                    }

                    ?>
                    </body>
                    </html>

                </div>
            </div>
        </section>

        <?php
            include "recomended.php";
        ?>

        <?php
           include "book_collection.php";
        ?>
        <?php
            include "bookrelated_products.php";
        ?>

    </main>

    <?php
    include "footer.php";
    ?>

</div>

</html>