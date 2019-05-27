<?php
if($_FILES["file"]["error"]>0)
{
echo "ERROR";
}



echo "Upload".$_FILES["file"]["name"];


?>
