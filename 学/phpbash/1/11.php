<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//for 打印1-9
/*for($i=1;$i<=9;$i++) {
	echo $i , '<br>';
}*/

for($i=1;$i<=9;$i++) {
	//echo $i , '~';
	for($j=1;$j<=$i;$j++) {
		echo $i . '*'. $j . '=' . $i*$j . "&nbsp;";
	}
	echo '<br>';
}




?>