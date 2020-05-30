<?php
session_start();
include "conn.php";
?>

<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
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

    <main class="main-content">


        <section class="upcoming-release">



        </section>

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: blue">
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-md-5">
                            <img src="2.png" class="img-responsive img-rounded"  style="height: 400px; width: 400px; border-radius: 50%" alt="Dhara Mehta" title="Dhara Mehta">
                        </div>
                        <div class="col-md-5" style="margin-top: 60px;">
                            <h2>Dhara Mehta</h2>
                            <p style="visibility: visible; font-style: italic; font-size: 20px">Computer Engineer</p>
                            <p><strong>Good knowledge in PHP,HTML and CSS</strong></p>

                            <p align="justify">

                                <br>


                            </p>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-5">
                        <img src="3.jpg"    style="height: 400px; width: 400px; border-radius: 50%" class="img-responsive img-rounded" alt="keyur vala" title="Mansi Vala">
                    </div>
                    <div class="col-md-5" style="margin-top: 60px;">
                        <h2>Mansi Vala</h2>
                        <p style="visibility: visible; font-style: italic; font-size: 20px">Computer Engineer</p>
                        <p><strong>Good knowledge in PHP,HTML and CSS</strong></p>

                        <p align="justify">

                            <br>


                        </p>




                    </div>
                </div>
            </div>
        </section>

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: blue">

                    <div class="row" style="margin-top: 30px;">
                        <div class="col-md-5">
                            <img src="1.png"   style="height: 400px; width: 400px; border-radius: 50%" class="img-responsive img-rounded" alt="keyur vala" title="Darshana Vekariya">
                        </div>
                        <div class="col-md-5" style="margin-top: 60px;">
                            <h2>Darshana Vekariya</h2>

                            <p style="visibility: visible; font-style: italic; font-size: 20px">Computer Engineer</p>
                            <p><strong>Good knowledge in PHP,HTML and CSS</strong></p>

                            <p align="justify">

                                <br>


                            </p>




                        </div>
                    </div>                    </div>
                </div>
            </div>
        </section>

        <?php
           // include "recomended.php";
        ?>

        <?php
       //    include "book_collection.php";
        ?>
        <?php
           // include "bookrelated_products.php";
        ?>

    </main>

    <?php
    include "footer.php";
    ?>

</div>

</html>