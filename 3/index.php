<html>
<body>


<?php


$myfile = fopen("new.txt","w") or die("lol");
$txt = "raja babu";
 fwrite($myfile,$txt);
$fileR = fopen("new.txt","r") or die ("die read");
echo fread($fileR,filesize("new.txt"));

	fclose($myfile);

?>


</body>

</head>
