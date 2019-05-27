<html>
<body>

<form action="" method="GET">
Enter no of text box<input type="text" name="num">
<button type="submit">submit</button>
</form>

<?php

$a=$_GET["num"];
for($i=0;$i<$a;$i++)
echo '<input type="text">';
?>


</body>
</html>
