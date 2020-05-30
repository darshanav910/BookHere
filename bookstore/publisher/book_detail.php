<?php
session_start();
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




        <div class="col-lg-9 col-sm-12">
            <div class="collection">

                <!-- Secondary heading -->
                <div class="sec-heading">
                    <h3>Shop <span class="theme-color">Books</span> Collection</h3>
                    <a class="view-all" href="#">View All<i class="fa fa-angle-double-right"></i></a>
                </div>
                <!-- Secondary heading -->

                <!-- Collection Content -->
                <div class="collection-content">
                    <ul>
                        <?php

                        if(isset($_GET["category"]))
                        {
                            $category=$_GET["category"];

                        }

                        if(!isset($category)) {
                            $res = mysqli_query($link, "select * from book_details where publication_id=$_SESSION[id]");
                        }
                        else
                        {
                            $res = mysqli_query($link, "select * from book_details where book_category='$category'");
                        }
                        while ($row = mysqli_fetch_array($res)) {
                            ?>
                            <li>
                                <div class="s-product">
                                    <div class="s-product-img">
                                        <img src="../publisher/<?php echo $row['book_image']; ?>" style="height: 140px;width: 90px;;" alt="">

                                        <div class="s-product-hover">
                                            <div class="position-center-x">
                                                <a href="#" class="plus-icon"><i
                                                        class="fa fa-shopping-cart"></i></span>
                                                    <a class="btn-1 sm shadow-0" data-toggle="modal"
                                                       <?php echo $row["id"]; ?>"
                                                       href="detail.php?id=<?php echo $row["id"];?>">Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h6><?php echo $row['bookname']; ?></h6>
                                    <span><?php echo $row['author_name']; ?></span>
                                </div>
                            </li>




                            <?php
                        }


                        ?>


                    </ul>
                </div>
                <!-- Collection Content -->


            </div>
        </div>

        <?php
           //    include "recomended.php";
        ?>

        <?php
         //  include "book_collection.php";
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