<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"book_here");
$a=$_GET["id"];

$r=mysqli_query($link,"select * from user_registration where id=$a");
echo "<form action='' method='post'>";
echo "<table>";
while($row=mysqli_fetch_array($r))
{
	echo "<tr>";
	echo "<td>fullname</td>";
	echo "<td><input type='text' name='t1' value='$row[fullname]'></td></tr>";
	echo "<tr><td>username</td>";
	echo "<td><input type='text' name='t2' value='$row[username]'></td><br></tr>";
	echo "<tr><td>password</td>";
	echo "<td><input type='text' name='t3' value='$row[password]'></td></tr>";
	echo "<tr><td>email</td>";
	echo "<td><input type='text' name='t4' value='$row[email]'></td></tr>";
	echo "<tr><td>contact_no</td>";
	echo "<td><input type='text' name='t5' value='$row[contact_no]'></td></tr>";
	echo "<tr><td>gender</td>";
	echo "<td><input type='text' name='t6' value='$row[gender]'></td></tr>";
	echo "<td>status</td>";
	echo "<td><input type='text' name='t7' value='$row[status]'></td></tr>";

	echo "<td><input type='submit' name='s1' value='edit now'></td>";
	echo "</tr>";


}
echo "</table>";
echo "</form>";



if(isset($_POST["s1"]))
{
	mysqli_query($link,"update user_registration set fullname='$_POST[t1]',username='$_POST[t2]',password='$_POST[t3]',email='$_POST[t4]',contact_no='$_POST[t5]',gender='$_POST[t6]',status='$_POST' where id=$a");

?>
	<script type="text/javascript">
		window.location="user_details.php";
	</script>
<?php

}
?>


