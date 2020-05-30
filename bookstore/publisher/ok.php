<?php if(!isset($_SESSION["username"]))
{ ?>
    <li><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i>Login</a></li>
    <li><a href="registration1.php" ><i class="fa fa-user"></i>Publication  Register</a></li>
<?php } else { ?>
    <li><a href="logout.php"><i class="fa fa-user"></i>Logout</a></li>
<?php } ?>
