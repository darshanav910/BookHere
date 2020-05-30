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
          //  include "banner.php";
        ?>

    </header>

    <main class="main-content">


        <section class="upcoming-release">



        </section>

        <section class="add-banners-holder tc-padding-bottom">
            <div class="container">
                <div class="row" style="font-size:27px; color: blue">


                    <?php
                    $res=mysqli_query($link,"select * from book_details");
                    echo "<table border='1'  style='border: solid; border-width: medium'>";
                    echo "<tr style='border: solid; border-width: medium' bgcolor='#ffe4c4'>
	<td>id</td>
	<td>book_category</td>
	<td>book_name</td>
	<td>pub_id</td>
	<td>image</td>
	<td>author name</td>
	<td>overview</td>
	<td>price</td>
	<td>qty</td>
	<td>link</td>";


                    while($row=mysqli_fetch_array($res))
                    {
                        echo "<tr>";



                        echo "<td>"; echo $row["id"]; echo "</td>";
                        echo "<td>"; echo $row["book_category"]; echo "</td>";
                        echo "<td>"; echo $row["bookname"]; echo "</td>";
                        echo "<td>"; echo $row["publication_id"]; echo "</td>";
                        echo "<td>";
                        ?> <img src="<?php echo $row["book_image"]; ?>" height="100" width="100"> <?php
                        echo "</td>";
                        echo "<td>"; echo $row["author_name"]; echo "</td>";
                        echo "<td>"; echo $row["overview"]; echo "</td>";
                        echo "<td>"; echo $row["price"]; echo "</td>";
                        echo "<td>"; echo $row["quantity"]; echo "</td>";


                        echo "<td>"; ?> <a href="book_delete.php?id=<?php echo $row["id"];  ?>">delete</a> <?php    echo "</td>";


                        echo "</tr>";
                    }
                    echo "</table>";

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
          //  include "bookrelated_products.php";
        ?>

    </main>

    <?php
    include "footer.php";
    ?>

</div>

</html>