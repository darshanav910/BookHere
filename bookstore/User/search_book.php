<?php
session_start();
include "conn.php";
?>

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");


?>


<div style="background-color: gray" class="upcoming-release">


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

        <section class="upcoming-release">
            <div class="container">
                <form action="" method="post">
                <div class="row" style="font-size:27px; color: #ff851d">

                    Enter Bookname<br>
                    <select name="t1" style="height: 50px; width: 374px; padding-left: 30px; color: black; font-size: 20px">
                        <option>Select--</option>
                        <?php
                        $res = mysqli_query($link, "select DISTINCT bookname from book_details");
                        while ($row = mysqli_fetch_array($res)) {
                            echo "<option>";
                            echo $row["bookname"];
                            echo "</option>";
                        }
                        ?>


                    </select>


                        <input style="width:100px;color: black;font-size:19px; border-radius: 50px; background-color: #ff851d" type="submit" name="submit1" value="Search">


                        </form>


                </div>
            </div>
        </section>
<?php
if(isset($_POST['submit1']))
{

    $res=mysqli_query($link,"select * from book_details where bookname='$_POST[t1]'");
    echo "<table border='1px' style='height:20px; width: 1000px;margin-bottom: 100px;border: black;border-width: 1px;background-color: white; margin-left: 100px'>";
    echo "<tr>";
    echo "<th>bookimage</th>";
    echo "<th style='width: 200px'>book Name</th>";
    echo "<th>author name</th>";
    echo "<th>price</th>";
    echo "<th>publication name</th>";
    echo "<th>address</th>";
    echo "<th>Contact No</th>";
    echo "<th>Email</th>";
    echo "<th>View</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($res))
    {
        $r1=mysqli_query($link,"select * from publication_registration where id='$row[publication_id]'");
        while($row1=mysqli_fetch_array($r1))
        {


            echo "<tr>";
            echo "<td>";
            ?> <img src="../publisher/<?php echo $row["book_image"]; ?>" height="100" width="100"> <?php
            echo "</td>";
            echo "<td>";
            echo $row['bookname'];
            echo "</td>";
            echo "<td>";
            echo $row['author_name'];
            echo "</td>";
            echo "<td>";
            echo $row['price'];
            echo "</td>";
            echo "<td>";
            echo $row1['publication_name'];
            echo "</td>";
            echo "<td>";
            echo $row1['address'];
            echo "</td>";
            echo "<td>";
            echo $row1['contact_no'];
            echo "</td>";
            echo "<td>";
            echo $row1['email'];
            echo "</td>";
            echo "<td>";?><a class="btn-1 sm shadow-0" data-toggle="modal" <?php echo $row["id"]; ?>" href="detail.php?id=<?php echo $row["id"];?>">View More</a><?php echo "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";
}

?>



<?php
        //   include "recomended.php";
        ?>

        <?php
          // include "book_collection.php";
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