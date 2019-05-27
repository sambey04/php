<html>
<body>

<form action="index.php" method="GET">

Enter Number:<input type="number" name="num" >
<button type="submit" >Submit </button>
</form>


<?php

if(!empty($_GET["num"]))
{
$x = $_GET["num"];
if($x%2==0)
	echo "Even";
else if($x%2!=0) 
	echo "Odd";
}
echo !empty($_GET["num"]);
?>


</body>
</html>
