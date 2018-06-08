<meta charset="utf8">
<?php 
// 显示所有信息，默认显示 INFO_ALL
//phpinfo();
//
//// Show just the module information. 仅仅显示PHP模块信息，
//// phpinfo(8) 返回同样的结果。
//phpinfo(INFO_MODULES);
//echo PHP_OS,'<br>';
//
//var_dump(PHP_OS) ;
//echo '<br>';
//
//echo PHP_VERSION,'<br>';
//
//echo PHP_SAPI,'<br>';
//define("UNAME","zhangsan");
//
//$lis="lisi";
//echo UNAME,'<br>';
//echo $lis;
//$arr = array('a' , 'b' , 'c');
//print_r($arr);
//echo $arr;
//print $arr;
//var_dump($arr);
//echo '<br>';
//echo __FILE__.'<br>';
//echo __LINE__.'<br>';
//echo __FUNCTION__.'<br>';
//echo __METHOD__.'<br>';
//echo __CLASS__.'<br>';
 
//exit "adf";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="up.php" method="post" enctype="multipart/form-data">
			用户名:<input type="text" name="uname"/><br />
			头像:<input type="file" name="uheader"/><br/>
			<input type="submit" value="提交"/>
		</form>
		
	</body>
</html>
