<meta charset="utf8">
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$a = 'hello';
$b = "word";
$c = <<<here
第一段
第二段
第三段
here;
echo $c;

$d = <<<'NOW'
	第一段
	第二段
	第三段
NOW;
echo $d;

?>