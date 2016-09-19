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
</body>
<?php 
$room = $_POST['room'];
$x = $_POST['x'];
$y = $_POST['y'];
$z = $_POST['z'];
$value = $_POST['value'];
//echo "<font color=red>room:".$room." x:".$x." y:".$y." z:".$z." value:".$value."</font>";
require('include/connect.php');
$sql5 = "SELECT * FROM tb_sudoku WHERE room='$room' and x='$x' and y='$y' and z='$z' and value='$value'";
$result5 = mysql_query($sql5);
$num_row = mysql_num_rows($result5);
if($num_row != 0){
	while ($rec5 = mysql_fetch_array($result5,MYSQL_ASSOC))
		{
			$sql = "UPDATE tb_sudoku SET user_up='T' WHERE room='$room' and x='$x' and y='$y' and z='$z' and value='$value'";
			$qry = mysql_query($sql);
			if($qry){
				echo "<br><font color=green>ถูก</font>";
				require('include/connect.php');
				$sql ="UPDATE tb_user SET score_ture=score_ture+1 WHERE name_user='$name_user'";
				$resul = mysql_query($sql);
			}else{
				echo "<br><font color=red>Error</font>";
			}
		}
}else{
			require('include/connect.php');
			//echo "<font color=red>ผิด</font>";
			$sql = "UPDATE tb_sudoku SET user_up='' WHERE room='$room' and x='$x' and y='$y' and z='$z'";
			$qry = mysql_query($sql);
				$sq_del ="UPDATE tb_user SET score_ture=score_ture-1 WHERE name_user='$name_user'";
				$result_del = mysql_query($sq_del);
				$sql_up ="UPDATE tb_user SET score_false=score_false+1 WHERE name_user='$name_user'";
				$result_up = mysql_query($sql_up);
			
}
?>
</html>
