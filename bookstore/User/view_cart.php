<?php
session_start();
include "conn.php";
if(!isset($_SESSION["username"]))
{
    ?>

    <script type="text/javascript">
        window.location="demo.php";
    </script>
    <?php

}

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

                  $res=mysqli_query($link,"select * from cart");

                  echo "<table border='1'  style='border: solid; border-width: medium'>";
                  echo "<th>Book Image</th>";
                  echo "<th>Book name</th>";
                  echo "<th>Book category</th>";
                  echo "<th>Book price</th>";
                  echo "<th>Book Quantity</th>";
                  echo "<th>delete</th>";
                  $total=0;
                  $G_total=0;
                  $c=0;
                  while($row=mysqli_fetch_array($res)) {
                      $price=$row['price'];
                      $qty=$row['quantity'];
                      $total=$price*$qty;

                      echo "<tr>";
                      echo "<td>"; ?> <img src="../publisher/<?php echo $row["book_image"]; ?>" height="100"
                                           width="100"><?php echo "</td>";
                      echo "<td>";
                      echo $row["bookname"];
                      echo "</td>";
                      echo "<td>";
                      echo $row["book_category"];
                      echo "</td>";
                      echo "<td>";
                      echo $row["price"];
                      echo "</td>";
                      echo "<td>";
                      echo $row["quantity"];
                      echo "</td>";
                      echo "<td>";
                     ?><a href="dlt_frm_cart.php?id=<?php echo $row['id']; ?> ">delete</a> <?php
                      echo "</td>";
                      echo "</tr>";
                      $c=$c+1;
                      $G_total=$G_total+$total;
                  }

                    echo "</table>";
                  if($c==0)
                  {
                     echo "no data";
                      ?>
                      <form action="" method="post">
                          <input type="submit" value="back" name="s1">
                      </form>
                      <?php
                      if(isset($_POST['s1']))
                      {
                        ?><script type="text/javascript">
                          window.location="display_book.php";
                      </script><?
                      }

                  }
                  else
                  {
                  echo "Total price...that u have to pay: ".$G_total;

                  ?>
                    <form action="" method="post">
                        <input style="width: 500px; border-color: black" type="submit" name="submit1" value="Pay Now">
                    </form>
                    <?php
                    if(isset($_POST['submit1']))
                    {
                        $_SESSION["pay"]=$G_total;
                        ?>
                        <script type="text/javascript">

                            window.location="paypal.php";
                        </script>

                        <?php
                    }
                    ?>
<?php
                  }
                  ?>

                </div>
            </div>
        </section>

        <?php
            include "recomended.php";
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