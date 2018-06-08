<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$arr = array('a' , 'b' , 'c' , 'd' , 'e');

for($k=0;$k<count($arr);$k++) {
	echo $arr[$k] , '<br>';
}

$arr1 = array('name'=>'lisi','age'=>23,'area'=>'beijing');
foreach($arr1 as $aaa=>$bbb) {
	echo $aaa , '~' , $bbb , '<br>';
}


/*foreach($arr1 as $k) {
	echo $k , '<br>';
}

foreach($arr as $k=>) {

}*/

print_r(array_keys($arr1));

$stu = array('lisi'=>3,'wang'=>5,'zhao'=>6);
foreach($stu as $k=>$v) {
	$stu[$k] = $v*2;
}

print_r($stu);//$stu = array('lisi'=>6,'wang'=>10,'zhao'=>12);


?>