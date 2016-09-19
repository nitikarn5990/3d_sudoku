<?php
if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
}
$name_user = $_COOKIE["username"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$check = $_POST['check'];
	if($check==1){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='1' WHERE name_user='$name_user'";
		$result = mysql_query($sql);
	}else if($check==2){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='2' WHERE name_user='$name_user'";
		$result = mysql_query($sql);
	}else if($check==3){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='3' WHERE name_user='$name_user'";
		$result = mysql_query($sql);
	}else if($check==4){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='4' WHERE name_user='$name_user'";
		$result = mysql_query($sql);
	}else if($check==5){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='5' WHERE name_user='$name_user'";
		$result = mysql_query($sql);
	}else if($check==6){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='6' WHERE name_user='$name_user'";
		$result = mysql_query($sql);
	}else if($check==7){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='7' WHERE name_user='$name_user'";
		$result = mysql_query($sql);
	}else if($check==8){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='8' WHERE name_user='$name_user'";
		$result = mysql_query($sql);
	}else if($check==9){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='9' WHERE name_user='$name_user'";
		$result = mysql_query($sql);

	}else if($check==10){
		require('include/connect.php');
		$sql = "UPDATE tb_pages SET id_room='10' WHERE name_user='$name_user'";
		$result = mysql_query($sql);

	}
?>
</body>
</html>
