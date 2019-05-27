<html><body>
<?php



$cookie_name="user";
echo $_COOKIE[$cookie_name];

if(!isset($_COOKIE["$cookie_name"]))
{
echo "cookie not found";
}
else 
echo "cookie found ".$cookie_name.$cookie_value;

?>

</body></html>
