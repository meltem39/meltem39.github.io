<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<fieldset>
	<legend>First Point</legend>
	X-axis <input type="number" id="x_value1" name="x_value1" pattern="[-100000-100000]">
	Y-axis <input type="number" name="y_value1" id ="y_value1" pattern="[-100000-100000]">
</fieldset>	
<p>
<fieldset>
	<legend>Second Point</legend>
	X-axis <input type="number" id="x_value2" name="x_value2" pattern="[-100000-100000]">
	Y-axis <input type="number" name="y_value2" id ="y_value2" pattern="[-100000-100000]">
</fieldset>	
<p>
<input type="submit" name="GÖNDER">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$x1 = $_POST['x_value1'];
$y1 = $_POST['y_value1'];
$x2 = $_POST['x_value2'];
$y2 = $_POST['y_value2'];

if ($x1==NULL || $y1==NULL|| $x2==NULL || $y2==NULL ) {
	$x1 = empty($x1) ? 0 : $x1;
	$x2 = empty($x2) ? 0 : $x2;
	$y1 = empty($y1) ? 0 : $y1;
	$y2 = empty($y2) ? 0 : $y2;
	if($x1 == $x2 && $y1 == $y2)
	{
		echo "<h3>Girilen iki nokta birbirine eşittir.</h3> (" .$x1. "," .$y1 .") <br>"; 
	}
	else
	{
		echo "<h3>Farklı iki nokta girdiniz.</h3> <br> Birinci noktanız : (" .$x1. "," .$y1. ") <br> İkinci noktanız : (" .$x2. "," .$y2. ")";
	}
}
else {
	if($x1 == $x2 && $y1 == $y2)
	{
		echo "<h3>Girilen iki nokta birbirine eşittir.</h3> (" .$x1. "," .$y1 .") <br>"; 
	}
	else
	{
		echo "<h3>Farklı iki nokta girdiniz.</h3> <br> Birinci noktanız : (" .$x1. "," .$y1. ") <br> İkinci noktanız : (" .$x2. "," .$y2. ")";
	}
}
}
?>
</body>
</html>