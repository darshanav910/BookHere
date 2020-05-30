<?php
$area=$_GET["area"];

if($area=="")
{

}
else
{
	include "conn.php";
	$res=mysqli_query($link,"select * from rajkot_area where area like('$area%')");
	while($row=mysqli_fetch_array($res))
	{
	echo $row["area"];
	echo "<br>";
	}
}
?>