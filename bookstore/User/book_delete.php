


<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "book_here");



$a=$_GET["id"];
mysqli_query($link,"delete from book_details where id=$a");
?>

<script>
	window.location="book_details.php";
</script>

