


<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "book_here");



$a=$_GET["id"];
mysqli_query($link,"delete from cart where id=$a");
?>

<script>
    window.location="view_cart.php";
</script>

