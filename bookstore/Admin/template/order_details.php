<?php

	include "header.php";
?>
<div class="content-wrapper">
	<?php
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"book_here");
	$a=$_GET["id"];

	echo "<table border='1'  style='border: solid; border-width: medium'>";
	echo "<tr  style='border: solid; border-width: medium' bgcolor='#ffe4c4'>
	<td style='width: 10%'>Order_id</td>
	<td style='width: 10%'>Book Name</td>
	<td style='width: 10%'>Price</td>
	<td style='width: 10%'>Quantity</td></tr>";


	$r1=mysqli_query($link,"select * from order_details where order_id='$a'");
	while($row1=mysqli_fetch_array($r1))
	{
		$r2=mysqli_query($link,"select * from cart where id='$row1[item_id]'");
		while($row2=mysqli_fetch_array($r2))
		{
			echo "<tr>";

			echo "<td>$a</td>";


			echo "<td>$row2[bookname]</td>";
			echo "<td>$row2[price]</td>";
			echo "<td>$row2[quantity]</td>";

			echo "</tr>";


		}
	}


	echo "</table>";
	echo "</form>";





	?>
</div>


<?php
	include "footer.php";

?>


