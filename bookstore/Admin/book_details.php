
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
	$res=mysqli_query($link,"select * from book_details");
	echo "<table border='1'  style='border: solid; border-width: medium'>";
	echo "<tr style='border: solid; border-width: medium' bgcolor='#ffe4c4'>
	<td>id</td>
	<td>book_name</td>
	<td>publication_id</td>
	<td>book_image</td>
	<td>author_name</td>
	<td>price</td>
	<td>quantity</td>";


	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";



		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["bookname"]; echo "</td>";
		echo "<td>"; echo $row["publication_id"]; echo "</td>";
		echo "<td>"; echo $row["book_image"]; echo "</td>";
		echo "<td>"; echo $row["author_name"]; echo "</td>";
		echo "<td>"; echo $row["price"]; echo "</td>";
		echo "<td>"; echo $row["quantity"]; echo "</td>";
		echo "<td>"; ?> <a href="book_edit.php?id=<?php echo $row["id"];  ?>">edit</a> <?php    echo "</td>";
		echo "<td>"; ?> <a href="book_delete.php?id=<?php echo $row["id"];  ?>">delete</a> <?php    echo "</td>";


		echo "</tr>";
	}
	echo "</table>";

	?>

</div>
</body>
</html>
