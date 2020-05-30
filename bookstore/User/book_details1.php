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
            //include "banner.php";
        ?>

    </header>

    <main class="main-content">


        <section class="upcoming-release">



        </section>

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: blue">
                    <?php
                    include "book_collection.php";
                    ?>
                </div>
            </div>
        </section>

        <?php
            include "recomended.php";
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