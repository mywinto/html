<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$arr = array('a' , 'b' , 'c');
//查 $数组名[健名]
echo $arr[1] , '<br>';//b

//增 $数组名[健] = 值
$arr[3] = 'd';
print_r($arr);

//改 $数组名[健] = 新值
$arr[1] = 'hello';
print_r($arr);

//删 unset($数组名[健])
unset($arr[0]);
print_r($arr);


$arr1 = array('name'=>'lisi' , 'age'=>23 , 'hobby'=>array('football','pingpang'));
print_r($arr1);

echo $arr1['hobby'][0] , '<br>';

?>