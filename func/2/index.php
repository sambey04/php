<html><body>

<p>hemmo<p>


<form method="GET" action="">

eneter number<input type="text" name="inp">
<button type=submit>SUBMIT</button>

</form>

<?php

$c=$_GET["inp"];


myfunc($c);



?>


<?php
function myfunc($a)
{
$b = $a*$a;
echo $b;
}

?>





</body></html>
