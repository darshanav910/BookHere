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
                $res1 = mysqli_query($link, "select * from publication_registration where id='$row[publication_id]'");
                while ($row1 = mysqli_fetch_array($res1)) {

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
                                                            <label style="font-size: 20px">Book Added by :  </label><h1 style="color: black"><?php echo $row1['publication_name']; ?></h1>

                                                            <div class="sp-quantity">
                                                            </div>
                                                        </div>
                                                        <ul class="btn-list">
                                                            <form action="" method="post">
                                                                <li><input type="submit" class="btn-1 sm shadow-0 "
                                                                           name="s1" value="Back"></li>
                                                            </form>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php }
            }
            ?>
        </section>

        <?php
        if(isset($_POST['s1']))
        {
            ?>
            <script type="text/javascript">
                window.location="display_book.php";
            </script>

            <?php
        }
           // include "recomended.php";
        ?>

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