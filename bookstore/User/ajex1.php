<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<input style="color: black" type="text" name="t1" id="t1" onKeyUp="aa();" autocomplete="off">
<br>
<div id="dd"></div>




<script type="text/javascript">
function aa()
{
var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","disp1.php?area="+document.getElementById("t1").value,false);
xmlhttp.send(null);

document.getElementById("dd").innerHTML=xmlhttp.responseText;

}
</script>
</body>
</html>
