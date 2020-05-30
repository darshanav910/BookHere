<?php
include "conn.php";
session_start();
?>


<div class="wrapper push-wrapper">


    <header id="header">


        <?php
            include "header.php";
        ?>

        <?php
         //   include "banner.php";
        ?>

    </header>

    <main class="main-content">


        <section class="upcoming-release">



        </section>

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: blue">
                <?php
                $res=mysqli_query($link,"select * from publication_registration");
                echo "<table style='border: solid; border-width: 1px'>";
                echo "<th align='center' style='color: #ff851d; width: 10%'>Full Name</th>";
                echo "<th style='color: #ff851d; width: 10%'>Publication Name</th>";
                echo "<th style='color: #ff851d; width: 10%'>Address</th>";
                echo "<th style='color: #ff851d; width: 10%'>City</th>";
                echo "<th style='color: #ff851d; width: 10%'>Contact Info</th>";
                while($row=mysqli_fetch_array($res))
                {
                    echo "<tr>";
                    echo "<td align='center'>$row[fullname]</td>";
                    echo "<td>$row[publication_name]</td>";
                    echo "<td>$row[address]</td>";
                    echo "<td>$row[city]</td>";
                    echo "<td>$row[contact_no]</td>";
                    echo "</tr>";
                }
                echo "</table>";
                ?>
                    <form style="padding-top: 10px" action="" method="post">
                        <input style="width: 150px; float: right" type="submit" class="btn-1 sm shadow-0 "
                               name="s1" value="Back">
                    </form>
                    <?php
                    if(isset($_POST['s1']))
                    {
                        ?>
                        <script type="text/javascript">
                            window.location="demo.php";
                        </script>
                        <?php
                    }

                    ?>
                </div>
            </div>
        </section>

        <?php
            //include "recomended.php";
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