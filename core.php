<?php
if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
}
$user_name = $_COOKIE["username"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
if($_POST['corefile']==1){ 
	require('include/connect.php');
	$sql = "SELECT * FROM tb_pages WHERE name_user='$user_name' ORDER BY id DESC";
	$result = mysql_query($sql);
	$num_row = mysql_num_rows($result);
	if($num_row>0){
		while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
		{
			$cor_use = $rec['core'];
			if($cor_use=="xyz"){
				echo "<img src=images/sudoku-11.png width=25 height=30/>";
			}else if($cor_use=="yzx"){
				echo "<img src=images/sudoku-22.png width=25 height=30/>";
			}else if($cor_use=="zxy"){
				echo "<img src=images/sudoku-33.png width=25 height=30/>";
			}
		}
	}
	
}
?>
<body>
</body>
</html>
