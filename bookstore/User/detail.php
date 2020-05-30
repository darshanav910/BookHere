<?php
session_start();
$a=$_GET["id"];
if(!isset($_SESSION["username"]))
{
    ?>

    <script type="text/javascript">
        window.location="demo.php";
    </script>
    <?php

}

?>


<div class="wrapper push-wrapper" xmlns="http://www.w3.org/1999/html">


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
            while($row=mysqli_fetch_array($res))
            {

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
                                                <img src="../publisher/<?php echo $row["book_image"]; ?>" alt="">
                                            </div>
                                        </div>
                                        <!-- Product Thumnbnail -->

                                        <!-- Product Detail -->

                                        <div class="col-sm-7">
                                            <div class="single-product-detail">

                                                <h4 style="color:#ff851d;">Book Name: <?php echo $row["bookname"];?></h4>
                                                <h4 style="color: #ff851d">Book Category:  <?php echo $row["book_category"];?></h4>

                                                <div class="prics">

                                                    <span class="now"><?php echo "Price:"; echo $row['price'];?></span></div>
                                                <h4>Overview</h4>

                                                <p><?php echo $row['overview'];?></p>
                                                <form action="" method="post">
                                                <div class="quantity-box">
                                                    <label>Set Quantity :</label>

                                                    <div class="sp-quantity">
                                                        <div class="sp-minus fff"><a class="ddd"
                                                                                     data-multi="-1">-</a>
                                                        </div>
                                                        <div class="sp-input">
                                                            <input type="text" class="quntity-input" name="qty"
                                                                   value="1"/>
                                                        </div>
                                                        <div class="sp-plus fff"><a class="ddd"
                                                                                    data-multi="1">+</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <ul class="btn-list">
                                                    <form action="" method="post">
                                                    <li><input type="submit" class="btn-1 sm shadow-0 " name="s1"  value="Add to cart" ></li>
                                                        <li><input type="submit" class="btn-1 sm shadow-0 " name="s2"  value="Back" ></li>
                                                    </form>
                                                </ul>
                                                </form>
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
                $b1=$row['id'];
                $b2=$row['book_category'];
                $b3=$row['bookname'];
                $b4=$row['publication_id'];
                $b5=$row['book_image'];
                $b6=$row['author_name'];
                $b7=$row['overview'];
                $b8=$row['price'];
                $b9=$row['quantity'];

                ?>

            <?php } ?>
        </section>

        <?php
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
<?php
if(isset($_POST['s1']))
{
    if($_POST['qty']>$b9)
    {
        ?><script type="text/javascript">
        alert("not in stock!!!");

    </script> <?php

    }
    else
    {
        $b9=$b9-$_POST['qty'];
        mysqli_query($link,"update book_details set quantity='$b9' where id='$a'");
        mysqli_query($link,"insert into cart values ('','$b1','$_SESSION[username]','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$_POST[qty]')");
        ?><script type="text/javascript">
        alert("You have added <?php echo $_POST['qty']; ?> items into cart!!!")
    </script><?php
    }



}
elseif(isset($_POST['s2']))
{
    ?>
    <script type="text/javascript">
        window.location="search_book.php";
    </script>
    <?php
}
?>


</html>