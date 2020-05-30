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
      //      include "banner.php";
        ?>

    </header>

    <main class="main-content">


        <section class="upcoming-release">



        </section>

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: blue">
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td> Enter Email Id:</td>
                                <td><input type="text"> </td>
                            </tr>
                            <tr>
                                <td colspan="2"><input style="color: black" type="submit"></td>
                            </tr>
                        </table>

                    </form>

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