<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
session_start();
?>


<div class="wrapper push-wrapper">


    <header id="header">


        <?php
            include "header.php";
        ?>

        <?php
            include "banner.php";
        ?>

    </header>

    <main class="main-content">


        <section class="upcoming-release">



        </section>

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: #ff851d">
                    We are providing a platform to people  to relaxation from tedious procedure of book searching from different places. All the Book-details are stored on Database cloud so anyone can see availability and if they like book and they want to exchange or buy book from the publication then he/she can exchange the book from anywhere and at any time within their city.

                </div>
            </div>
        </section>

        <?php
           // include "recomended.php";
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