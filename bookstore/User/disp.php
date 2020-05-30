<?php
$bookname=$_GET["bookname"];

if($bookname=="")
{

}
else
{
	include "conn.php";
	$res=mysqli_query($link,"select * from book_details where bookname like('$bookname%')");
	while($row=mysqli_fetch_array($res))
	{
	echo $row["bookname"];
	echo "<br>";
	}
}
?>