<?php
session_start();
include "conn.php";
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
                <div class="row" style="float: left;font-size:27px; color: #ff851d">

                    Enter Your nearest location<br>
                    <select name="t1" style="height: 50px; width: 374px; padding-left: 30px; color: black; font-size: 20px">
                        <option>Select--</option>
                        <?php
                        $res = mysqli_query($link, "select * from rajkot_area");
                        while ($row = mysqli_fetch_array($res)) {
                            echo "<option>";
                            echo $row["area"];
                            echo "</option>";
                        }
                        ?>


                    </select>





                </div>
                <div class="row" style="float: left; margin-left: 50px;font-size: 27px; color: #ff851d">
                    Enter Kilometer<br>
                    <select name="s1" style="border-color: gray;height: 50px; width: 374px; padding-left: 30px;font-size: 20px; color: black">
                        <option>Select--<option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>



                    </select>

                </div>
                <div style="float: right; margin-right:200px; margin-top: 40px ">

                    <input style="color: black;font-size:19px; border-radius: 50px; background-color: #ff851d" type="submit" name="submit1" value="Search">


                    </form>

                </div>


            </div>
        </section>
<?php
if(isset($_POST['submit1']))
{

    $res=mysqli_query($link,"select * from publication_registration where nearest_location like('%$_POST[t1]%') && nearest_place_km<='$_POST[s1]'");
    echo "<table border='1px' style='height:20px; width: 1000px;margin-bottom: 100px;border: black;border-width: 1px;background-color: white; margin-left: 100px'>";
    echo "<tr>";
    echo "<th>Fullname</th>";
    echo "<th style='width: 200px'>Publication Name</th>";
    echo "<th>Address</th>";
    echo "<th>City</th>";
    echo "<th>Pincode</th>";
    echo "<th>nearest Area</th>";
    echo "<th>Nearest area km</th>";
    echo "<th>Contact No</th>";
    echo "<th>Email</th>";

    echo "<th>View Details</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>";
        echo $row['fullname'];
        echo "</td>";
        echo "<td>";
        echo $row['publication_name'];
        echo "</td>";
        echo "<td>";
        echo $row['address'];
        echo "</td>";
        echo "<td>";
        echo $row['city'];
        echo "</td>";
        echo "<td>";
        echo $row['pincode'];
        echo "</td>";
        echo "<td>";
        echo $row['nearest_location'];
        echo "</td>";
        echo "<td>";
        echo $row['nearest_place_km'];
        echo "</td>";
        echo "<td>";
        echo $row['contact_no'];
        echo "</td>";
        echo "<td>";
        echo $row['email'];
        echo "</td>";


        echo "<td>" ; ?><a href="pub_detail.php?id=<?php echo $row['id']; ?>">View Details</a><?php echo "</td>";
        echo "</tr>";

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