<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

$li = 23;
$zhang = 35;

$liu = $li;
echo $liu, '~' , $li , '<br>';//23,23

$li = 25;
echo $liu, '~' , $li , '<br>' ; //23 , 25


$liu = 88;
echo $liu, '~' , $li , '<br>' ;//88,25
?>