<meta charset="utf8">
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$a = 5;
$b = 3;
$c = ($a > $b);
var_dump($c);
//比较运算的运算结果 是 布尔值 真/假

$f = '3';
var_dump($b , $f);
echo("<br>");
echo "打印";
var_dump($b==$f);
var_dump($b===$f);


$str = 'abcdef';
var_dump(strpos($str, 'u'));
var_dump(strpos($str, 'a'));//0

if(strpos($str, 'a') === false) {
	echo '没找到';
} else {
	echo '找到了';
}

?>