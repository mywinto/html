<?php
$mysql_conf = array('host' => 'localhost', 'db' => 'MY_DB', 'db_user' => 'root', 'db_pwd' => '12345678', 'db_table' => 'MY_TABLE', );
$name = $_POST["name"];
$namel = strlen($name);
if ($namel == 0) {
	die("请输入姓名");
}
$mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);

if ($mysqli -> connect_errno) {

	die("could not connect to the database:\n" . $mysqli -> connect_error);
	//诊断连接错误
}
$mysqli -> query("set names 'utf8';");
//编码转化
$select_db = $mysqli -> select_db($mysql_conf['db']);
$query = "create database if not exists " . $mysql_conf["db"];
mysqli_query($mysqli, $query);
if (!$select_db) {
	die("could not connect to the db:\n" . $mysqli -> error);
}
$query = "create table if not exists " . $mysql_conf["db_table"] . "(id int auto_increment primary key,name text not null)";
mysqli_query($mysqli, $query);
$query="Describe ".$mysql_conf["db_table"]." age";
$result=mysqli_query($mysqli, $query);
if(mysqli_fetch_array($result)){
//	echo "存在".$query;
}else{
//	echo "不存在".$query;
	$query="alter table ".$mysql_conf["db_table"]." add age integer not Null";
//alter table MY_TABLE add transactor varchar(10) not Null
mysqli_query($mysqli, $query);
}
if (mysqli_error($mysqli)) {

	echo mysqli_error($mysqli);
	//诊断连接错误
}
$query = "select * from " . $mysql_conf["db_table"] . " where name='" . $name . "'";
$result = mysqli_query($mysqli, $query);
$num = 0;
while (mysqli_fetch_assoc($result)) {
	$num++;
	//	break;
}
if ($num != 0) {
	$query="delete from ".$mysql_conf["db_table"]." where name='".$name."'";
	mysqli_query($mysqli, $query);
	die("请重新输入");
}

$query = "insert into " . $mysql_conf["db_table"] . " (name) values ('" . $name . "')";
mysqli_query($mysqli, $query);
if (mysqli_error($mysqli)) {
	die(mysqli_error($mysqli));
}
$sql = "select name from " . $mysql_conf["db_table"] . " where name = 'asdfsfd';";
$res = $mysqli -> query($sql);
if (!$res) {
	die("sql error:\n" . $mysqli -> error);
}
while ($row = $res -> fetch_assoc()) {
	var_dump($row);
}


$res -> free();
$mysqli -> close();
die("adff");
exit("adf");
?>