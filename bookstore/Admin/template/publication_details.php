
<?php
session_start();
?>
<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "book_here");
?>



<?php

include "header.php";
?>
<div class="content-wrapper">








	<?php
	$res=mysqli_query($link,"select * from publication_registration");
	echo "<table border='1'  style='border: solid; border-width: medium'>";
	echo "<tr style='border: solid; border-width: medium' bgcolor='#ffe4c4'>
	<td>id</td>
	<td>fullname</td>
	<td>publication_name</td>
	<td>address</td>
	<td>city</td>
	<td>pincode</td>
	<td>contact_no</td>
	<td>email</td>
	<td>username</td>
	<td>password</td>
	<td>status</td>";


	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";



		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["fullname"]; echo "</td>";
		echo "<td>"; echo $row["publication_name"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["city"]; echo "</td>";
		echo "<td>"; echo $row["pincode"]; echo "</td>";
		echo "<td>"; echo $row["contact_no"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["username"]; echo "</td>";
		echo "<td>"; echo $row["password"]; echo "</td>";
		echo "<td>"; echo $row["status"]; echo "</td>";
		echo "<td>"; ?> <a href="publication_edit.php?id=<?php echo $row["id"];  ?>">edit</a> <?php    echo "</td>";
		echo "<td>"; ?> <a href="publication_delete.php?id=<?php echo $row["id"];  ?>">delete</a> <?php    echo "</td>";


		echo "</tr>";
	}
	echo "</table>";

	?>

</div>
</body>
</html>
<?php

include "footer.php";
?>
