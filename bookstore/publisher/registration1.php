<?php
session_start();
include "conn.php";
?>
<link rel="stylesheet" href="css/select/jquery.multiselect.css">

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

        <section  class="upcoming-release" style="background-color:whitesmoke">
            <div  class="container" >
                <div  class="row" style="font-size:27px; color: blue">
                    <div  class="container" >

                        <div  id="login">

                            <form class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-push-3"  name="form1" action="" method="post"  style="border-style: solid; border-width: 1px; border-color: silver">

                                <fieldset class="clearfix">


                                    <p><span class="fontawesome-user"></span><input style="background-color: whitesmoke; border-style: solid; border-color: black; border-width: 1px" type="text" placeholder="fullname" name="t1"  required pattern="[A-Za-z  ]+"
                                                                                    title="please enter a-z and space only" placeholder="fullname"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                                    <p><span class="fontawesome-user"></span><input style="background-color: whitesmoke; border-style: solid; border-color: black; border-width: 1px" type="text" placeholder="publication_name" style="background-color: whitesmoke" name="t2" required title="please enter value between a to z only"
                                                                                    pattern="[A-Za-z  ]+" placeholder="publication_name"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                                    <p><span class="fontawesome-user"></span><input style="background-color: whitesmoke; border-style: solid; border-color: black; border-width: 1px" type="text" placeholder="address" name="t3" style="background-color: whitesmoke" required title="please enter value between a to z only"
                                                                                    pattern="[A-Za-z  ]+" placeholder="address"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                                    <p><span class="fontawesome-user"></span><input style="background-color: whitesmoke; border-style: solid; border-color: black; border-width: 1px" type="text" placeholder="city" name="t4"  style="background-color: whitesmoke" required title="please enter value between a to z only"
                                                                                    pattern="[A-Za-z  ]+" placeholder="city"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                                    <p><span class="fontawesome-user"></span><input type="text" style="background-color: whitesmoke; border-style: solid; border-color: black; border-width: 1px" placeholder="pincode" name="t5" style="background-color: whitesmoke" required title="please enter 6 digit only.."
                                                                                    pattern="[0-9]{6}" placeholder="pincode"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                                    <p>Select Nearest Location <select name="multicheckbox[]" id="ethinicorigin"  multiple="multiple" >
                                            <?php
                                            $res=mysqli_query($link,"select * from rajkot_area");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                ?>

                                                <option value='<?php echo $row["area"]; ?>'>
                                                    <?php
                                                echo $row["area"];
                                                echo "</option>";
                                            }
                                            ?>


                                        </select></p>



                                    <p>
                                    <div class="dropdown">
                                       <select class="form-control" name="snk" style="background-color: white; color:black">
                                           <option hidden>select--</option>
                                           <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                           <option value="6">6</option>
                                       </select>
                                    </div>

                                    </p>
                                    <p><span class="fontawesome-user"></span><input  style="background-color: whitesmoke; border-style: solid; border-color: black; border-width: 1px" type="text" placeholder="contact_no" style="background-color: whitesmoke" name="t6" required title="mobile number must be 10 digit"
                                                                                     pattern="[0-9]{10}" placeholder="contact_no "></p> <!-- JS because of IE support; better: placeholder="Username" -->
                                    <p><span class="fontawesome-user"></span><input  style="background-color: whitesmoke; border-style: solid; border-color: black; border-width: 1px" type="text" placeholder="email" style="background-color: whitesmoke" name="t7" required="required" placeholder="email"></p>
                                    <p><span class="fontawesome-user"></span><input style="background-color: whitesmoke; border-style: solid; border-color: black; border-width: 1px" type="text" placeholder="username" style="background-color: whitesmoke" name="t8" required title="please enter value between a to z only"
                                                                                    pattern="[A-Za-z  ]+" placeholder="Username"></p>
                                    <p><span class="fontawesome-user"></span><input style="background-color: whitesmoke; border-style: solid; border-color: black; border-width: 1px" type="text" placeholder="password" style="background-color: whitesmoke" name="t9" required title="please enter valid password"
                                                                                    pattern="[A-Za-z0-9@#!]+" placeholder="password"></p>

                                    <input type="submit" name="registerxxx" value="Publication Registration" class="btn-1 shadow-0 full-width">


                                </fieldset>

                            </form>



                        </div> <!-- end login -->

                    </div>
                    <?php
                    if (isset($_POST["registerxxx"])) {
                        $count="";
                        $box=$_POST['multicheckbox'];

                        while (list ($key,$val) = @each ($box))
                        {
                            $count=$count+1;

                            if($count==1)
                            {
                                $aa=$val;
                            }
                            else
                            {
                                $aa=$aa.",".$val;
                            }

                        }
                        $snk=$_POST['snk'];

                        mysqli_query($link, "insert into publication_registration values('','$_POST[t1]','$_POST[t2]','$_POST[t3]', '$_POST[t4]','$_POST[t5]','$aa','$snk','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','','','y')");
                        ?>
                        <script type="text/javascript">
                            alert("Registration Successful...!");
                        </script>
                        <?php
                    }
                    ?>
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
          //  include "bookrelated_products.php";
        ?>

    </main>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="css/select/jquery.multiselect.js"></script>

    <script>

        $('select[multiple]').multiselect({
            columns: 2,
            placeholder: 'Select options',
            selectAll: true
        });

    </script>
    <?php
    include "footer.php";
    ?>

</div>

</html>