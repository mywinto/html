<meta charset="utf8">
<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/

/*for($g=1;$g<=100;$g++) {
	for($m=1;$m<=100;$m++) {
		for($x=1;$x<=100;$x++) {
			if( ($g+$m+$x==100) && ($g*5+$m*3+$x/3==100) ) {
				echo '公鸡',$g,'只,母鸡',$m,'只,小鸡',$x,'只<br>';
			}
		}
	}
}*/

for($g=1;$g<=18;$g++) {
	for($m=1;$m<=32;$m++) {
		$x = 100-$g-$m;
		if($g*5+$m*3+$x/3==100) {
			echo '公鸡',$g,'只,母鸡',$m,'只,小鸡',$x,'只<br>';
		}
	}
}



?>