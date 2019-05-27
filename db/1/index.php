<html><body>
<?php
$link=mysqli_connect("localhost","root","");
if($link===false)
{
die ("ERROr".mysqli_connect_error());
}
else
echo "connect succesful".mysqli_get_host_info($link);

function create(){
$sql="CREATE DATABASE demo";
if(mysqli_query($link,$sql))
{
echo "database created";

}
else 

{
echo "fuck off".mysql_error($link);
}
}

?>
<form action="" >
<button onclick="create()">create db</button>
</form>

</body></html>
