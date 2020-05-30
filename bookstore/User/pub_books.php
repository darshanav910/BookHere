<?php
session_start();
include "conn.php";
$a=$_GET['id'];
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



        </section>


        <?php
       //     include "recomended.php";
        ?>

        <section class="book-collection">
            <div class="container">
                <div class="row">

                    <!-- Book Collections Tabs -->
                    <div id="book-collections-tabs">

                        <!-- collection Name -->
                        <div class="col-lg-3 col-sm-12">
                            <div class="sidebar">
                                <h4>Top Books Catagories</h4>
                                <ul>
                                    <li onclick="window.location='pub_books.php' "><a href="pub_books.php">All Books</a></li>

                                    <?php
                                    $res=mysqli_query($link,"select * from book_category");
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        ?><li onclick="window.location='book_details.php?category=<?php echo $row["book_category"] ?>'"><?php
                                        echo "<a href='#'>";
                                        echo $row["book_category"];
                                        echo "</a>";
                                        ?></li><?php
                                    }
                                    ?>

                                </ul>
                            </div>
                        </div>
                        <!-- collection Name -->

                        <!-- Collection Content -->
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
                                        $link = mysqli_connect("localhost", "root", "");
                                        mysqli_select_db($link, "book_here");

                                        if(isset($_GET["category"]))
                                        {
                                            $category=$_GET["category"];

                                        }

                                        if(!isset($category)) {
                                            $res = mysqli_query($link, "select * from book_details WHERE publication_id='$a'");
                                        }
                                        else
                                        {
                                            $res = mysqli_query($link, "select * from book_details where book_category='$category' AND publication_id='$a'");
                                        }
                                        while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                            <li>
                                                <div class="s-product">
                                                    <div class="s-product-img">
                                                        <img src="../publisher/<?php echo $row['book_image']; ?>" style="height: 140px;width: 90px;;" alt="">

                                                        <div class="s-product-hover">
                                                            <div class="position-center-x">

                                                                    <a class="btn-1 sm shadow-0" data-toggle="modal"
                                                                    <?php echo $row["id"]; ?>"
                                                                    href="detail1.php?id=<?php echo $row["id"];?>">Quick view</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6><a href="book-detail.html"><?php echo $row['bookname']; ?></a></h6>
                                                    <span><?php echo $row['author_name']; ?></span>
                                                </div>
                                            </li>

                                            <div class="modal fade quick-view" id="quick-view<?php echo $row["id"] ?>"
                                                 role="dialog">
                                                <div class="position-center-center" role="document">
                                                    <div class="modal-content">
                                                        <button class="close" data-dismiss="modal" aria-label="Close"><span
                                                                aria-hidden="true">&times;</span>
                                                        </button>
                                                        <div class="single-product-detail">
                                                            <div class="row">

                                                                <!-- Product Thumnbnail -->
                                                                <div class="col-sm-5">
                                                                    <div class="product-thumnbnail">
                                                                        <img src="../publisher/<?php echo $row["book_image"]; ?>" alt="">
                                                                    </div>
                                                                </div>
                                                                <!-- Product Thumnbnail -->

                                                                <!-- Product Detail -->

                                                                <div class="col-sm-7">
                                                                    <div class="single-product-detail">
                            <span class="availability">Availability :<strong>Stock<i
                                        class="fa fa-check-circle"></i></strong></span>

                                                                        <h3><?php echo $row["bookname"];?></h3>
                                                                        <h3><?php echo $row["book_category"];?></h3>

                                                                        <div class="prics">

                                                                            <span class="now"><?php echo "price:"; echo $row['price'];?></span></div>
                                                                        <h4>Overview</h4>

                                                                        <p><?php echo $row['overview'];?></p>

                                                                        <div class="quantity-box">
                                                                            <label>Qty :</label>

                                                                            <div class="sp-quantity">
                                                                                <div class="sp-minus fff"><a class="ddd"
                                                                                                             data-multi="-1">-</a>
                                                                                </div>
                                                                                <div class="sp-input">
                                                                                    <input type="text" class="quntity-input"
                                                                                           value="1"/>
                                                                                </div>
                                                                                <div class="sp-plus fff"><a class="ddd"
                                                                                                            data-multi="1">+</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="btn-list">
                                                                            <li><a class="btn-1 sm shadow-0 " href="#">ADD TO CART</a></li>
                                                                            <li><a class="btn-1 sm shadow-0 blank" href="#"><i
                                                                                        class="fa fa-heart"></i></a></li>
                                                                            <li><a class="btn-1 sm shadow-0 blank" href="#"><i
                                                                                        class="fa fa-repeat"></i></a></li>
                                                                            <li><a class="btn-1 sm shadow-0 blank" href="#"><i
                                                                                        class="fa fa-share-alt"></i></a></li>
                                                                            <form name="form1" action="" method="post">
                                                                                <li><input type="submit" name="submit1" value="ADD TO CART1"> </li>
                                                                            </form>
                                                                        </ul>
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


                                    </ul>
                                </div>
                                <!-- Collection Content -->


                            </div>
                        </div>
                        <!-- Collection Content -->

                    </div>
                    <!-- Book Collections Tabs -->

                </div>
            </div>
        </section>
        <?php
            include "bookrelated_products.php";
        ?>

    </main>

    <?php
    include "footer.php";
    ?>

</div>

</html>