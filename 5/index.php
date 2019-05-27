<html>
	<body>

		<form method="GET" action="">
			Name:<input type="text" name="name">
			Password: <input type="password" name="pass">
			<button type="submit" >SUBMIT</button>
		</form>
<p>
<?php

$a =  $_GET["name"];
echo $a;

?>
</p>
	</body>
	
</html>
