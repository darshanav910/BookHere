



<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "book_here");
?>


<footer id="footer">

    <!-- Footer columns -->
    <div class="footer-columns">
        <div class="container">

            <!-- Add banner -->
            <div class="footer-ad-banner">
                <a href="#"><img src="images/logo-1.png" alt=""></a>
            </div>
            <!-- Add banner -->

            <!-- Columns Row -->
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-column footer-links">

                        <h4 style="color: #ff851d">About Us</h4>
                        <p>We are the students of ATMIYA INSTITUTE OF TECHNOLOGY AND SCINCE,Rajkot(INDIA)</p>
                        <p>We developed this website for Book purchase and price comparision with different stationary.</p>

                    </div>
                </div>
                <!-- Footer Column -->

                <!-- Footer Column -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-column footer-links">
                        <h4>Our Team</h4>
                        <ul>
                            <li><a href="contact.php">About Us</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li><a href="demo.php">HomePage</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal"></i>Login</a>
                            <li><a href="#" data-toggle="modal" data-target="#register-modal"></i>Register</a>

                        </ul>
                    </div>
                </div>
                <!-- Footer Column -->

                <!-- Footer Column -->

                <!-- Footer Column -->

                <!-- Footer Column -->
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-column newsletter">
                        <h4>Weekly Newsletter</h4>

                        <p>Get our awesome releases and latest updates with exclusive new Books and offers in your inbox.</p>

                        <form class="newsletter-input">
                            <i class="fa fa-envelope-o"></i>
                            <input class="form-control.newsletter" type="text" placeholder="Enter Your Email">
                            <button>SUBSCRIBE</button>
                        </form>
                      
                    </div>
                </div>
                <!-- Footer Column -->

            </div>
            <!-- Columns Row -->

        </div>
    </div>
    <!-- Footer columns -->

    <!-- Sub Footer -->
    <div class="sub-foorer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <a class="back-top" href="#">Back to Top<i class="fa fa-caret-up"></i></a>

                </div>
            </div>
        </div>
    </div>
    <!-- Sub Footer -->

</footer>
<nav id="menu" class="responive-nav">
    <a class="r-nav-logo" href="index-2.html"><img src="images/logo-1.png" alt=""></a>
    <ul class="respoinve-nav-list">
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-1"><i class="pull-right fa fa-angle-down"></i>Home</a>
            <ul class="collapse" id="list-1">
                <li><a href="demo.php">Home</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>Book</a>
            <ul class="collapse" id="list-2">
                <li><a href="book_details.php">All Books</a></li>
                <li><a href="search_book.php">Search Book</a></li>
                <li><a href="search_stationary.php">Search Stationary</a></li>
            </ul>
        </li>


        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-5"><i class="pull-right fa fa-angle-down"></i>User</a>
            <ul class="collapse" id="list-5">
                <li><a href="update_profile.php">My Profile</a></li>
                <li><a href="change_pswd.php">Change password</a></li>
            </ul>
        </li>
        <li><a href="contact_us.php">Contact</a></li>
    </ul>
</nav>

<div class="modal fade open-book-view" id="open-book-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <div id="magazine">
                <div style="background-image:url(images/pages/01.jpg);"></div>
                <div style="background-image:url(images/pages/02.jpg);"></div>
                <div style="background-image:url(images/pages/03.jpg);"></div>
                <div style="background-image:url(images/pages/04.jpg);"></div>
                <div style="background-image:url(images/pages/04.jpg);"></div>
                <div style="background-image:url(images/pages/05.jpg);"></div>
                <div style="background-image:url(images/pages/05.jpg);"></div>
                <div style="background-image:url(images/pages/06.jpg);"></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade login-modal" id="login-modal" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <strong>LOGIN</strong>
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <form class="sending-form">

                <div class="form-group">
                    <input class="form-control" name="l1" id="l1" required="required" placeholder="Username" required title="please enter value between a to z only" pattern="[A-Za-z  ]+">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" name="l2" id="l2" required="required" type="password"
                           placeholder="Password" required title="please enter valid password" pattern="[A-Za-z0-9@#!]+">
                    <i class="fa fa-user"></i>
                </div>

                <input type="button" name="login" value="Login" onclick="fun();" autocomplete="off"
                       class="btn-1 shadow-0 full-width"></button>
                <br>

                <div id="err" style="color:red; visibility: hidden; ">Invalid username or password</div>
                <div>
                    <div style="float: left">
                        <a href="forgot_password.php">forgot password?</a>

                    </div>
                    <div style="float: right">
                        <a style="color: #ff851d;"
                        " href="#" data-toggle="modal" data-target="#register-modal">Register Now</a>
                    </div>
                </div>


                            </form>


            <script type="text/javascript">
                function fun() {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.open("GET", "login.php?username=" + document.getElementById("l1").value + "&password=" + document.getElementById("l2").value, false);
                    xmlhttp.send(null);
                    var a = xmlhttp.responseText;
                    var b = a;
                    if (b.indexOf('notfound') > -1) {
                        document.getElementById("err").style.visibility = "visible";

                    }
                    else {
                        document.getElementById("err").style.visibility = "hidden";
                        window.location = "demo.php";
                    }


                }
            </script>


        </div>
    </div>
</div>






<!-- publication registration-->

<div class="modal fade login-modal" id="register-modal" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <strong>REGISTRATION</strong>
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <form class="sending-form" action="" method="post">

                <div class="form-group">
                    <input class="form-control" name="t1" required pattern="[A-Za-z  ]+"
                           title="please enter a-z and space only" placeholder="fullname">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <input class="form-control" name="t2" required title="please enter value between a to z only"
                           pattern="[A-Za-z  ]+" placeholder="Username">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" name="t3" type="password" required title="please enter valid password"
                           pattern="[A-Za-z0-9@#!]+" placeholder="password">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" type="email" name="t4" required="required" placeholder="email" required title="please enter valid email_id">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" name="t5" required title="mobile number must be 10 digit"
                           pattern="[0-9]{10}" placeholder="contact_no ">
                            <i class="fa fa-user"></i>
                </div>
                <div class="form-group">
                    <table  class="table" style="margin-left: 0px; border-style: none">
                        <tr style="border-style:none">
                            <td style="border-style:none;width:0px;"><input type="radio" name="t6" value="Male" style="height:15px"></td>
                            <td style="border-style:none; width:0px;">Male</td>
                        </tr>
                        <tr style="border-style:none">
                            <td style="border-style:none;width:0px;"><input type="radio" name="t6" value="Female" style="height:15px"></td>
                            <td style="border-style:none;width:0px;">Female</td>

                        </tr>
                    </table>

                </div>


              <input type="submit" name="register1" value="Register Now" class="btn-1 shadow-0 full-width">

            </form>
            <?php
            if (isset($_POST["register1"])) {
                mysqli_query($link, "insert into user_registration values('','$_POST[t1]','$_POST[t2]','$_POST[t3]', '$_POST[t4]','$_POST[t5]','$_POST[t6]','NO')");
                ?>
                <script type="text/javascript">
                    alert("Registration Successful...!");
                </script>
                <?php
            }
            ?>


        </div>

    </div>F

</div>




<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/gmap3.min.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/contact-form.js"></script>
<script src="js/bigslide.js"></script>
<script src="js/3d-book-showcase.js"></script>
<script src="js/turn.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/mcustom-scrollbar.js"></script>
<script src="js/timeliner.js"></script>
<script src="js/parallax.js"></script>
<script src="js/countdown.js"></script>
<script src="js/countTo.js"></script>
<script src="js/owl-carousel.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/appear.js"></script>
<script src="js/sticky.js"></script>
<script src="js/prettyPhoto.js"></script>
<script src="js/isotope.pkgd.js"></script>
<script src="js/wow-min.js"></script>
<script src="js/classie.js"></script>
<script src="js/main.js"></script>


<script type="text/javascript" src="switcher/cookie.js"></script>
<script type="text/javascript" src="switcher/colorswitcher.js"></script>


</body>

