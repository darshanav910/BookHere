



<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "book_here");
?>




<footer id="footer">

    <!-- Footer columns -->
    <div class="footer-columns">
        <div class="container">

            <div class="footer-ad-banner">
                <a href="#"><img src="images/logo-1.png" alt=""></a></div>
            <!-- Add banner -->

            <!-- Add banner -->

            <!-- Columns Row -->
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-column footer-links">

                        <h4 style="color: #ff851d">About Us</h4>
                        <p>We are the student of Atmiya Institute of Technology and Science, Rajkot(INDIA)</p>
                        <p>We developed this Website for book purchase and price comparision with different stationary</p>

                    </div>
                </div>
                <!-- Footer Column -->

                <!-- Footer Column -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-column footer-links">
                        <h4>Our Team</h4>
                        <ul>
                            <li><a href="contact_us.php">Contact Us</a></li>
                            <li><a href="team.php">Team</a></li>
                            <li><a href="demo.php">HomePage</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                            <li><a href="registration1.php" ><i></i>Publication  Register</a></li>
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

                        <p>Get our awesome releases and latest updates with exclusive news and offers in your inbox.</p>

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
                <li><a href="demo.php">home</a></li>

            </ul>
        </li>

        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-3"><i class="pull-right fa fa-angle-down"></i>Shop</a>
            <ul class="collapse" id="list-3">
                <li><a href="shop.php">All Shop</a></li>
            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-4"><i class="pull-right fa fa-angle-down"></i>Books</a>
            <ul class="collapse" id="list-4">
                <li><a href="display_book.php">All Book</a></li>
                <li><a href="my_book1.php">My Book</a></li>
                <li><a href="add_new_book.php">Add New Book</a></li>

            </ul>
        </li>
        <li>
            <a class="triple-eff" data-toggle="collapse" href="#list-2"><i class="pull-right fa fa-angle-down"></i>publisher</a>
            <ul class="collapse" id="list-2">
                <li><a href="change_pswd.php">Change password</a></li>
                <li><a href="update_profile.php">Update Profile</a></li>
            </ul>
        </li>
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
                    <input class="form-control" style="color: black" name="l1" id="l1" required="required" placeholder="Username" required title="please enter value between a to z only" pattern="[A-Za-z  ]+>
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" style="color: black" name="l2" id="l2" required="required" type="password"
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
                        <a style="color: #ff851d;"    href="registration1.php">Register Now</a>
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






<-- publication registration-->

<div class="modal fade login-modal" id="register-modal1" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <strong>PUBLICATION REGISTRATION</strong>
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <form class="sending-form" action="" method="post">

                <div class="form-group">
                    <input class="form-control" style="color: black" name="t1" required pattern="[A-Za-z  ]+"
                           title="please enter a-z and space only" placeholder="fullname">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" style="color: black" name="t2" required title="please enter value between a to z only"
                           pattern="[A-Za-z  ]+" placeholder="publication_name">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" style="color: black"  name="t3" required title="please enter value between a to z only"
                           pattern="[A-Za-z  ]+" placeholder="address">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" style="color: black" name="t4" required title="please enter value between a to z only"
                           pattern="[A-Za-z  ]+" placeholder="city">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" style="color: black" name="t5" required title="please enter 6 digit only.."
                           pattern="[0-9]{6}" placeholder="pincode">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">


                        <select name="s1" style="height: 50px; width: 374px; padding-left: 30px">
                                <option>select nearest area</option>
                                <?php
                                $res=mysqli_query($link,"select * from rajkot_area");
                                while($row=mysqli_fetch_array($res))
                                {
                                    echo "<option>";
                                    echo $row["area"];
                                    echo "</option>";
                                }
                                ?>


                            </select>
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group">

                    <select name="s2" style="height: 50px; width: 374px; padding-left: 35px">
                        <option>select approx kilometer from nearest area</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>


                    </select>
                    <i class="fa fa-user"></i>


                </div>


                <div class="form-group">
                    <input class="form-control" style="color: black" name="t6" required title="mobile number must be 10 digit"
                           pattern="[0-9]{10}" placeholder="contact_no ">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" style="color: black" type="email" name="t7" required="required" placeholder="email">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" style="color: black"  name="t8" required title="please enter value between a to z only"
                           pattern="[A-Za-z  ]+" placeholder="Username">
                    <i class="fa fa-user"></i>
                </div>

                <div class="form-group">
                    <input class="form-control" style="color: black"  name="t9" type="password" required title="please enter valid password"
                           pattern="[A-Za-z0-9@#!]+" placeholder="password">
                    <i class="fa fa-user"></i>
                </div>









                <input type="submit" name="register1" value="Publication Registration" class="btn-1 shadow-0 full-width">

            </form>
            <?php
            if (isset($_POST["register1"])) {
                mysqli_query($link, "insert into publication_register values('','$_POST[t1]','$_POST[t2]','$_POST[t3]', '$_POST[t4]','$_POST[t5]','$_POST[s1]','$_POST[s2]','$_POST[t6]','$_POST[t7]','$_POST[t8]','$_POST[t9]','y')");
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



<div class="modal fade quick-view" id="quick-view" role="dialog">
    <div class="position-center-center" role="document">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <div class="single-product-detail">
                <div class="row">

                    <!-- Product Thumnbnail -->
                    <div class="col-sm-5">
                        <div class="product-thumnbnail">
                            <img src="images/qiuck-view/img-01.jpg" alt="">
                        </div>
                    </div>
                    <!-- Product Thumnbnail -->

                    <!-- Product Detail -->
                    <div class="col-sm-7">
                        <div class="single-product-detail">
                            <span class="availability">Availability :<strong>Stock<i
                                        class="fa fa-check-circle"></i></strong></span>

                            <h3>Land the Earth Beach</h3>
                            <ul class="rating-stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                                <li>1 customer review</li>
                            </ul>
                            <div class="prics">
                                <del class="was">$32.00</del>
                                <span class="now">$30.99</span></div>
                            <h4>Overview</h4>

                            <p>With this highly anticipated new novel, the author of the bestselling Life of Pi returns
                                to the storytelling power and luminous wisdom of his master novel. The High Mountains of
                                Portugal.</p>

                            <div class="quantity-box">
                                <label>Qty :</label>

                                <div class="sp-quantity">
                                    <div class="sp-minus fff"><a class="ddd" data-multi="-1">-</a></div>
                                    <div class="sp-input">
                                        <input type="text" class="quntity-input" value="1"/>
                                    </div>
                                    <div class="sp-plus fff"><a class="ddd" data-multi="1">+</a></div>
                                </div>
                            </div>
                            <ul class="btn-list">
                                <li><a class="btn-1 sm shadow-0 " href="#">add to cart</a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-repeat"></i></a></li>
                                <li><a class="btn-1 sm shadow-0 blank" href="#"><i class="fa fa-share-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
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

