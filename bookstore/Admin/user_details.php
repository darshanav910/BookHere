
<?php
session_start();
?>
<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "book_here");
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Untitled Document</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>








	<?php
	$res=mysqli_query($link,"select * from user_registration");
	echo "<table border='1'  style='border: solid; border-width: medium'>";
	echo "<tr style='border: solid; border-width: medium' bgcolor='#ffe4c4'>
	<td>id</td>
	<td>fullname</td>
	<td>username</td>
	<td>password</td>
	<td>email</td>
	<td>contact_no</td>
	<td>gender</td>
	<td>status</td>";


	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";



		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["fullname"]; echo "</td>";
		echo "<td>"; echo $row["username"]; echo "</td>";
		echo "<td>"; echo $row["password"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["contact_no"]; echo "</td>";
		echo "<td>"; echo $row["gender"]; echo "</td>";
		echo "<td>"; echo $row["status"]; echo "</td>";
		echo "<td>"; ?> <a href="user_edit.php?id=<?php echo $row["id"];  ?>">edit</a> <?php    echo "</td>";
		echo "<td>"; ?> <a href="user_delete.php?id=<?php echo $row["id"];  ?>">delete</a> <?php    echo "</td>";
		echo "<td>"; ?> <a href="activate.php?id=<?php echo $row["id"];  ?>">activate</a> <?php    echo "</td>";
		echo "<td>"; ?> <a href="deactivate.php?id=<?php echo $row["id"];  ?>">de-activate</a> <?php    echo "</td>";


		echo "</tr>";
	}
	echo "</table>";

	?>

</div>
</body>
</html>
