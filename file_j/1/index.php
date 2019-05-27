<html><body>

<?php
$txt="im gonna write";
$myfile = fopen("a.txt","r+") or die("not found ");

echo fread($myfile,filesize("a.txt"));

//$mywite= fopen("a.txt","w") or die("i am die write");

fwrite($myfile,$txt);


echo fread($myfile,filesize("a.txt"));
fclose($myfile)

?>

</body></html>
