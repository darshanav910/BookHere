<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
$a=$_GET["id"];

$r=mysqli_query($link,"select * from book_details where id=$a");
echo "<form action='' method='post'>";
echo "<table>";
while($row=mysqli_fetch_array($r))
{
	echo "<tr>";
	echo "<td>Bookname</td>";
	echo "<td><input type='text' name='t1' value='$row[bookname]'></td></tr>";
	echo "<tr><td>Publication_id</td>";
	echo "<td><input type='text' name='t2' value='$row[publication_id]'></td><br></tr>";
	echo "<tr><td>Book_image</td>";
	echo "<td><input type='text' name='t3' value='$row[book_image]'></td></tr>";
	echo "<tr><td>author_name</td>";
	echo "<td><input type='text' name='t4' value='$row[author_name]'></td></tr>";
	echo "<tr><td>price</td>";
	echo "<td><input type='text' name='t5' value='$row[price]'></td></tr>";
	echo "<tr><td>quantity</td>";
	echo "<td><input type='text' name='t6' value='$row[quantity]'></td></tr>";
	echo "<td><input type='submit' name='s1' value='edit now'></td>";
	echo "</tr>";


}
echo "</table>";
echo "</form>";



if(isset($_POST["s1"]))
{
	mysqli_query($link,"update book_details set bookname='$_POST[t1]',publication_id='$_POST[t2]',book_image='$_POST[t3]',author_name='$_POST[t4]',price='$_POST[t5]',quantity='$_POST[t6]' where id=$a");

?>
	<script type="text/javascript">
		window.location="book_details.php";
	</script>
<?php

}
?>


