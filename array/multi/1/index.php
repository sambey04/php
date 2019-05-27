<html><body>
<?php
$myfile = fopen("1.txt","r") or die("unable to open");
echo fread($myfile,filesize("1.txt"))
?>

</body></html>
