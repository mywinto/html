<?php
$UNAME=$_POST["uname"];
$uheader=$_FILES["uheader"];
$img="upload/".$uheader["name"];
echo $uheader["tmp_name"]."<br>";

if ($uheader!=NULL&&$uheader[3]==0){
	
	move_uploaded_file($uheader["tmp_name"],$img);
}
echo $uheader["error"].'<br>';

echo $UNAME.'<br>';
echo $_FILES["uheader"].'<br>';
var_dump($_FILES["uheader"]);

?>