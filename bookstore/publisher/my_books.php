<?php
include "conn.php";
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


<div align="center" class="col-lg-10 col-md-6 col-sm-10 col-xs-6">





	<?php

	$res=mysqli_query($link,"select * from book_details where publication_id='$_SESSION[id1]'");
	echo "<table border='1'  style='border: solid; border-width: medium'>";
	echo "<tr style='height: 30px;border: solid; border-width: medium' bgcolor='#ffe4c4'>

	<th>BookImage</th>
	<th>Category</th>
	<th>Bookname</th>

	<th>Author</th>
	<th>Overview</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Edit</th>
	<th>Delete</th>";


	while($row=mysqli_fetch_array($res))
	{
		echo "<tr>";


		echo "<td>";
		?> <img src="<?php echo $row["book_image"]; ?>" height="130" width="100"> <?php
		echo "</td>";
		echo "<td>"; echo $row["book_category"]; echo "</td>";
		echo "<td>"; echo $row["bookname"]; echo "</td>";
		echo "<td>"; echo $row["author_name"]; echo "</td>";
		echo "<td>"; echo $row["overview"]; echo "</td>";
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
