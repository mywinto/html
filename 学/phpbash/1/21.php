<meta charset="utf8">
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
$a = 'hello';

function t() {
	print_r($_GET);
	print_r($_POST);
	print_r($_REQUEST);
	$GLOBALS['b'] = 'word';
}

t();
print_r($GLOBALS);
//echo '<pre>';
//print_r($_SERVER);

//print_r($_ENV);
//echo getenv('COMPUTERNAME');

//http://192.168.1.100:85/1224/phpbash/21.php

?>