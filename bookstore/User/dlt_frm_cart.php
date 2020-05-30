


<?php
session_start();
include "conn.php";


$a=$_GET["id"];
mysqli_query($link,"delete from cart where id=$a");
?>

<script>
	window.location="view_cart.php";
</script>

