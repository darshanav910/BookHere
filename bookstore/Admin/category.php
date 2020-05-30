<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Untitled Document</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
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


</body>
</html>
