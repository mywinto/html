<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*for($i=0;$i<=9;$i=$i+3) {
	echo $i , '<br>';
}*/

/*for($i=0,$j=5; $i<=$j; $i=$i+1,$j=$j-1) {
	echo $i , '~' , $j, '<br>';
}*/

/*$i=0;
for(;$i<=9;) {
	echo $i , '<br>';
	$i=$i+3;
}*/

for($i=1; $i<=5; $i=$i+1) {
	//continue
	if($i == 4) {
		break;
	}
	echo $i , '<br>';
}

echo 'aa';

?>