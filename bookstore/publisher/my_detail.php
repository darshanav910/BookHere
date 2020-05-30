<?php
session_start();
include "conn.php";
$a=$_GET["id"];
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

            <?php $res=mysqli_query($link,"select * from book_details where id=$a");

            while($row=mysqli_fetch_array($res)) {

                    ?>

                    <div class="container" style="height:700px; margin-top: 100px">

                        <div class="row" style="font-size:27px; color: blue">
                            <div class=" quick-view" id="quick-view<?php echo $row["id"] ?>"
                                 role="dialog">
                                <div class="position-center-center" role="document">
                                    <div class="modal-content" style="margin-top: -600px">

                                        <div class="single-product-detail">
                                            <div class="row">

                                                <!-- Product Thumnbnail -->
                                                <div class="col-sm-5">
                                                    <div class="product-thumnbnail">
                                                        <img src="<?php echo $row["book_image"]; ?>" alt="">
                                                    </div>
                                                </div>
                                                <!-- Product Thumnbnail -->

                                                <!-- Product Detail -->

                                                <div class="col-sm-7">
                                                    <div class="single-product-detail">

                                                        <h3>Book Name: </h3><h3 style="color: #ff851d;"><?php echo $row["bookname"]; ?></h3>

                                                        <h3 style="color: #ff851d; font-size: 20px"><?php  echo "Category: "; echo $row["book_category"]; ?></h3>

                                                        <div class="prics">

                                                            <span class="now"><?php echo "Price:";
                                                                echo $row['price']; ?></span></div>

                                                        <div>

                                                            <div class="sp-quantity">
                                                            </div>
                                                        </div>
                                                        <ul class="btn-list">
                                                            <form action="" method="post">
                                                                <li><input type="submit" class="btn-1 sm shadow-0 "
                                                                           name="s1" value="Edit Details"></li>
                                                                <li><input type="submit" class="btn-1 sm shadow-0 "
                                                                           name="s3" value="Delete This Book"></li>

                                                                <li><input type="submit" class="btn-1 sm shadow-0 "
                                                                           name="s2" value="Back"></li>

                                                            </form>
                                                        </ul>
                                                        <?php
                                                        if(isset($_POST['s1']))
                                                        {
                                                            ?>
                                                            <script type="text/javascript">
                                                                window.location="book_edit.php?id=<?php echo $row["id"]; ?>";
                                                            </script>

                                                        <?php
                                                        }
                                                        elseif(isset($_POST['s2']))
                                                        {
                                                        ?>
                                                            <script type="text/javascript">
                                                                window.location="my_book1.php";
                                                            </script>

                                                        <?php

                                                        }
                                                        elseif(isset($_POST['s3']))
                                                        {
                                                        ?>
                                                            <script type="text/javascript">
                                                                window.location="book_delete.php?id=<?php echo $row["id"]; ?>";
                                                            </script> <?php

                                                        }
                                                        // include "recomended.php";
                                                        ?>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php

            }
            ?>
        </section>



        <?php
         //  include "book_collection.php";
        ?>
        <?php
        //   include "bookrelated_products.php";
        ?>

    </main>

    <?php
    include "footer.php";
    ?>

</div>

</html>