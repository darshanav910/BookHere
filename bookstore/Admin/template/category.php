<?php
session_start();
?>
<?php

include "header.php";
?>



<div class="content-wrapper">
<form name="form1" action="" method="post">
	<table>

		<tr>
			<td>Enter Book category<td><input type="text" name="t1"></td></td>
		</tr>



		<tr>
			<td><td><input type="submit" name="t3" value="submit"></td></td>
		</tr>

</form>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
if(isset($_POST["t3"]))
{

	$res=mysqli_query($link,"insert into book_category VALUES ('','$_POST[t1]')");

}
?>

	<?php

	include "footer.php";
	?>