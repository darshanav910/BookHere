<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
$a=$_GET["id"];

$r=mysqli_query($link,"select * from publication_registration where id=$a");
echo "<form action='' method='post'>";
echo "<table>";
while($row=mysqli_fetch_array($r))
{
	echo "<tr>";
	echo "<td>fullname</td>";
	echo "<td><input type='text' name='t1' value='$row[fullname]'></td></tr>";
	echo "<tr><td>publication_name</td>";
	echo "<td><input type='text' name='t2' value='$row[publication_name]'></td><br></tr>";
	echo "<tr><td>address</td>";
	echo "<td><input type='text' name='t3' value='$row[address]'></td></tr>";
	echo "<tr><td>city</td>";
	echo "<td><input type='text' name='t4' value='$row[city]'></td></tr>";
	echo "<tr><td>pincode</td>";
	echo "<td><input type='text' name='t5' value='$row[pincode]'></td></tr>";
	echo "<tr><td>contact_no</td>";
	echo "<td><input type='text' name='t6' value='$row[contact_no]'></td></tr>";
	echo "<tr><td>email</td>";
	echo "<td><input type='text' name='t7' value='$row[email]'></td></tr>";
	echo "<tr><td>username</td>";
	echo "<td><input type='text' name='t8' value='$row[username]'></td></tr>";
	echo "<tr><td>password</td>";
	echo "<td><input type='text' name='t9' value='$row[password]'></td></tr>";


	echo "<td><input type='submit' name='s1' value='edit now'></td>";
	echo "</tr>";


}
echo "</table>";
echo "</form>";



if(isset($_POST["s1"]))
{
	mysqli_query($link,"update publication_registration set fullname='$_POST[t1]',publication_name='$_POST[t2]',address='$_POST[t3]',city='$_POST[t4]',pincode='$_POST[t5]',contact_no='$_POST[t6]',email='$_POST[t7]',username='$_POST[t8]',contact_no='$_POST[t9]'where id=$a");

?>
	<script type="text/javascript">
		window.location="publication_details.php";
	</script>
<?php

}
?>


