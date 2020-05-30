<?php
session_start();
include "conn.php";
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


                    <section id="contact-page" class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 style="color: #ff851d">Contact Form</h1>
                                <div class="status alert alert-success" style="display: none;"></div>
                                <form name="contactform" method="post" action="" >
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <input type="text" id="firstname" name="firstname" placeholder="Full Name"
                                                       class="form-control input-width" required pattern="[A-Za-z  ]+" title="please enter valid fullname[a-z and space only]">

                                            </div>
                                            <div class="form-group" style="margin-top:30px;">
                                                <input type="text" id="subject" name="subject" placeholder="Subject"
                                                       class="form-control input-width" required pattern="^[A-Za-z  ]+" title="please enter valid lastname[a-z and spaceonly]">
                                            </div>
                                            <div class="form-group" style="margin-top:30px;">
                                                <input type="email" id="email" name="email" placeholder="E-Mail ID"
                                                       class="form-control input-width" autocomplete="off" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="please enter valid email address">


                                            </div>

                                        </div>
                                        <div class="col-sm-7">
                                            <textarea name="message"   style="height: 100px; width: 400px; margin-bottom: 50px" id="message" required="required" class="form-control" rows="8"  placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group" align="center">
                                        <input type="submit" name="submit1" class="btn  btn-lg submit-button" style="color:white; background-color: #ff851d" value="Send Message">
                                    </div>
                                </form>
                                <?php
                                if(isset($_POST['submit1'])) {
                                    mysqli_query($link, "insert into contact_form VALUES('$_POST[firstname]','$_POST[subject]','$_POST[email]','$_POST[message]')") or die(mysqli_error($link));

                                    ?>
                                    <script type="text/javascript">
                                        alert("Message sent Successfully...!");
                                    </script>
                                    <?php
                                }   ?>
                            </div><!--/.col-sm-8-->

                        </div>
                    </section><!--/#contact-page-->


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