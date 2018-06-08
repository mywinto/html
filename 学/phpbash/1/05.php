<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

//某美女要求,有房且有车才嫁 &&且
$car = true;
$house = true;

//var_dump($car && $house);
/*if($car && $house) {
	echo 'marry';
} else {
	echo 'gun';
}*/


//某女要求,有房或者有车就嫁 || 或
$car = false;
$house = false;
if($car || $house) {
	echo 'marry';
} else {
	echo 'gun';
}



?>