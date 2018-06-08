<meta charset="utf8">
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*$str = "中国";
echo strlen($str) , '<br>';
echo mb_strlen($str, 'utf8') , '<br>';

$str = 'abced';
echo strpos($str, 'a');//0

if(strpos($str, 'a') === false) {
	echo 'no';
} else {
	echo 'yes';
}
echo '<hr>';
$str = "fuck you";
echo str_replace('fuck', 'f**k', $str);
*/
//echo '<hr>';
/*$str = '男人,女人,男孩,女孩';
echo strtr($str, array('男'=>'女' , '女'=>'男')) , '<br>';*/

//echo strtr($str,'女','屁');

$str = "helloword";
echo substr($str, 0) , '<br>';
echo substr($str, 3) , '<br>';

echo substr($str, 3 , 3) , '<br>';


echo substr($str, -5, -4) , '<br>';

$tag = "linux,php,mysql";
print_r(explode(',' , $tag));
$arr = array('title'=>'tody is a good day' , 'content'=>'good day' , 'pubtime'=>12334532);
echo implode('/', $arr);

$str = "a.sbc.aaa.jpg";
echo substr($str , strpos($str, '.')+1);

echo strrchr($str, '.');
echo '<hr>';
echo ltrim(strrchr($str, '.') , '.');


?>