<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*echo 'welcome ';
echo 'to ';
echo 'beijing<br>';

echo 'welcome ';
echo 'to ';
echo 'beijing<br>';

echo 'welcome ';
echo 'to ';
echo 'beijing<br>';*/

function wel() {
	echo 'welcome ';
	echo 'to ';
	echo 'beijing<br>';
}

wel();
wel();

function sum($a , $b) {
	echo $a + $b;
}

sum(5,5);

function sum1($a , $b) {
	//$a = 8;
	//$b = 8;
	return $a + $b;
}

echo sum1(8,8);

?>