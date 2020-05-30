<?php

	include "header.php";
?>
<div class="content-wrapper">


	<?php
	$link = mysqli_connect("localhost", "root", "");
	mysqli_select_db($link, "book_here");
	?>


	<?php
	$res=mysqli_query($link,"select * from order1");
	echo "<table border='1'  style='border: solid; border-width: medium'>";
	echo "<tr style='border: solid; border-width: medium' bgcolor='#ffe4c4'>
	<td>id</td>
	<td>firstname</td>
	<td>lastname</td>
	<td>username</td>

	<td>contact_no</td>";


	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";



		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["fullname"]; echo "</td>";

		echo "<td>"; echo $row["username"]; echo "</td>";

		echo "<td>"; echo $row["mo_no"]; echo "</td>";
		echo "<td>"; ?> <a href="order_details.php?id=<?php echo $row["id"];  ?>">View Details</a> <?php    echo "</td>";

		echo "</tr>";
	}
	echo "</table>";

	?>

</div>

</div>


<?php
	include "footer.php";

?>


