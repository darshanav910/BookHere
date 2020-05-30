


<?php
session_start();
include "conn.php";
$a=$_GET['id'];


$a=$_GET["id"];
mysqli_query($link,"delete from book_details where id=$a");
?>

<script>
	window.location="my_book1.php";
	alert("Book Deleted Successfully!!!");
</script>

