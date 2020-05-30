<?php

include "conn.php";
?>
<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content=""/>

    <title>Bookstore HTML5 Template</title>


    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/color-1.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/transition.css">

    <link rel="stylesheet" href="www.atlasestateagents.co.uk/css/tether.min.css">
    <script src="www.atlasestateagents.co.uk/javascript/tether.min.js"></script>

    <link href="switcher/switcher.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" id="skins" href="css/default.css" type="text/css" media="all">

    <link href='https://fonts.googleapis.com/css?family=Merriweather:300,300italic,400italic,400,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900italic,900,100italic,100' rel='stylesheet' type='text/css'>

    <script src="js/vendor/modernizr.js"></script>
</head>
<body>
<div class="topbar">
    <div class="container">

        <!-- Online Option -->

        <!-- Online Option -->

        <!-- Social Icons -->
        <div class="social-icons pull-right">

        </div>
        <!-- Social Icons -->

        <!-- Cart Option -->
        <div class="cart-option">
            <ul>

                <?php if(!isset($_SESSION["username1"]))
                { ?>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i>Login</a></li>
                    <li><a href="registration1.php"><i class="fa fa-user"></i>Publication Register</a></li>
                    <?php
                }
                else { ?>
                    <li><a href="logout.php"><i class="fa fa-user"></i>logout</a></li>
                    <li><a href="registration1.php"><i class="fa fa-user"></i>Publication Register</a></li>

                <?php } ?>



            </ul>
        </div>
        <!-- Cart Option -->

    </div>
</div>


<nav class="nav-holder style-1">
    <div class="container">
        <div class="mega-dropdown-wrapper">

            <!-- Logo -->
            <div class="logo">
                <a href="index-2.html"><img src="images/logo-1.png" alt=""></a>
            </div>
            <!-- Logo -->

            <!-- Search bar -->

            <!-- Search bar -->

            <!-- Responsive Button -->
            <div class="responsive-btn">
                <a href="#menu" class="menu-link circle-btn"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Responsive Button -->

            <!-- Navigation -->
            <div class="navigation">
                <ul>
                    <li >
                        <a href="demo.php"><i class="fa fa-home"></i>Home</a>

                    </li>

                    <li class="dropdown-icon">
                        <a href="#"><i class="fa fa-shopping-bag"></i>Shop</a>
                        <ul>
                            <li><a href="shop.php">All Shop</a></li>

                        </ul>
                    </li>
                    <li class="dropdown-icon">
                        <a href="#"><i class="fa fa-book"></i>Books</a>
                        <ul>
                            <li><a href="display_book.php">All Book</a></li>
                            <li><a href="my_book1.php">My Books</a></li>
                            <li><a href="add_new_book.php">Add New book</a></li>

                        </ul>
                    </li>


                    <li class="dropdown-icon">
                        <a href="#"><i class="fa fa-user"></i>Publisher</a>
                        <ul>
                            <li><a href="change_pswd.php">Change Password</a></li>
                            <li><a href="update_profile.php">Update Profile</a></li>

                        </ul>
                    </li>



                    <li><a href="contact_us.php"><i class="fa fa-phone"></i>contact</a>


                    </li>
                </ul>
            </div>
            <!-- Navigation -->

        </div>
    </div>
</nav>
