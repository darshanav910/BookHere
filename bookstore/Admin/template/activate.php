<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
$a=$_GET["id"];

$r=mysqli_query($link,"select * from user_registration where id=$a");


while($row=mysqli_fetch_array($r))
{
	mysqli_query($link,"update user_registration set status='YES' where id=$a");
}


?>
	<script type="text/javascript">
		window.location="user_details.php";
	</script>



