<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
$a=$_GET["id"];
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
            <?php $res=mysqli_query($link,"select * from publication_registration where id=$a");
            while($row=mysqli_fetch_array($res))
            {
                $Id=$row['id'];
                $latitude=$row['x'];
                $longitude=$row['y'];
                ?>
            <div class="container" style="height:700px; margin-top: 100px">

                <div class="row" style="font-size:27px; height: 1000px">

                    <div class=" quick-view" id="quick-view<?php echo $row["id"] ?>"
                         role="dialog">

                        <div class="position-center-center" role="document">

                            <div class="modal-content" style="margin-top: -600px">

                                <div class="single-product-detail">
                                    <div class="row">

                                        <!-- Product Thumnbnail -->
                                        <div class="col-lg-8 col-sm-5">

                                            <div class="product-thumnbnail">
                                            <!---    <img src="../publisher/<?php //echo $row["book_image"]; ?>" alt="">--->

                                                <style>
                                                    #map {
                                                        height: 400px;
                                                        width: 100%;
                                                    }
                                                </style>
                                                <div id="map"></div>
                                                <script>
                                                    function initMap() {
                                                        var uluru = {lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?>};
                                                        var map = new google.maps.Map(document.getElementById('map'), {
                                                            zoom: 15,
                                                            center: uluru
                                                        });
                                                        var marker = new google.maps.Marker({
                                                            position: uluru,
                                                            map: map
                                                        });
                                                    }
                                                </script>
                                                <script async defer
                                                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANklp1Wk4Sjo1jogQmKUkNZf-qrx3iyt4&callback=initMap">
                                                </script>
                                            </div>
                                        </div>
                                        <!-- Product Thumnbnail -->

                                        <!-- Product Detail -->

                                        <div style="float: right;" class="col-lg-4 col-sm-7">

                                            <div class="single-product-detail">


                                                <h3>Publisher:  <?php echo $row["fullname"];?></h3>
                                                <h3>Publisher Name:   <?php echo $row["publication_name"];?></h3>

                                                <div class="prics">

                                                    <span><?php echo "Address:"; echo $row['address'];?></span></div>


                                                <p>Contact Info: <?php echo $row['contact_no'];?></p>
                                                <form action="" method="post">


                                                <ul class="btn-list">
                                                    <form action="" method="post">

                                                        <li><input type="submit" class="btn-1 sm shadow-0 " name="s2"  value="Back" ></li>
                                                        <li><input type="submit" class="btn-1 sm shadow-0 " name="s1"  value="View Books" ></li>
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
if(isset($_POST['s2']))
{
    ?>
    <script type="text/javascript">
        window.location="search_stationary.php";
    </script>
    <?php
}
elseif(isset($_POST['s1']))
{
    ?><script type="text/javascript">
    window.location="pub_books.php?id=<?php echo $Id; ?>";
    </script>
    <?php
}


?>


</html>