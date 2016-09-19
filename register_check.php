<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<title>Untitled Document</title>
</head>
<body>
<?php 
$user_reg= isset($_POST["user_reg"]) ? $_POST["user_reg"] : '';
$pass_reg= isset($_POST["pass_reg"]) ? $_POST["pass_reg"] : '';

if ($user_reg=="" or $pass_reg=="" ) {
	echo "Enter your username";
	echo "<meta http-equiv=refresh content=1;URL=register.php>"; exit();
}
	

require('include/connect.php');
$sql="select * from  tb_user where name_user='$user_reg' ";
$result=mysql_db_query($database_conn,$sql);
$num=mysql_num_rows($result);

if($num>0) {
	echo "<h3>ERROR : Username</h3>";	 echo "<meta http-equiv=refresh content=1;URL=register.php>"; exit();
	}
$sql="INSERT INTO tb_user (name_user,password,lang) VALUES('$user_reg','$pass_reg','en')";
$result=mysql_db_query($database_conn,$sql);
$sql_pages="INSERT INTO tb_pages (name_user,core,pages,id_room) VALUES('$user_reg','xyz','1','1')";
$result_pages=mysql_db_query($database_conn,$sql_pages);


if ($result) {
	echo "<h3>Register successful</h3>";
	exit();
	
} else {
	echo "<h3>No register !</h3>";
	echo "<meta http-equiv=refresh content=1;URL=register.php>";
}

?>
</body>
</html>