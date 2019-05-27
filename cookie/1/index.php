<html><body>



<?php
$cookie_name="user";
$cookie_value="sambey";
setcookie($cookie_name,$cookie_value,time()+3600,"/")

?>
<?php
if(isset($_COOKIE[$cookie_name]))
{
echo "cookie not found"; 
}
else
echo "cookie found".$cookie_name.$cookie_value;

?>
</body></html>
