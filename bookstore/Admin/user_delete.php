


<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "book_here");



$a=$_GET["id"];
mysqli_query($link,"delete from user_registration where id=$a");
?>

<script>
	window.location="user_details.php";
</script>

