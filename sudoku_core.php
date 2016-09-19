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
if($_POST['sudokucore']==1){ 

		require('include/connect.php');
		$sql = "SELECT * FROM tb_pages WHERE name_user='$name_user' ORDER BY id DESC LIMIT 1";
		$result = mysql_query($sql);
		while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
		{
			$core_use = $rec['core'];
			$pages_use = $rec['pages'];
		}
		
		if($core_use=="xyz"){
			if($pages_use==1){
				echo "<img src=images/core/core_z1.jpg width=271 height=260/>";
			}else if($pages_use==2){
				echo "<img src=images/core/core_z2.jpg width=271 height=260/>";
			}else if($pages_use==3){
				echo "<img src=images/core/core_z3.jpg width=271 height=260/>";
			}else if($pages_use==4){
				echo "<img src=images/core/core_z4.jpg width=271 height=260/>";
			}else if($pages_use==5){
				echo "<img src=images/core/core_z5.jpg width=271 height=260/>";
			}else if($pages_use==6){
				echo "<img src=images/core/core_z6.jpg width=271 height=260/>";
			}else if($pages_use==7){
				echo "<img src=images/core/core_z7.jpg width=271 height=260/>";
			}else if($pages_use==8){
				echo "<img src=images/core/core_z8.jpg width=271 height=260/>";
			}else if($pages_use==9){
				echo "<img src=images/core/core_z9.jpg width=271 height=260/>";
			}
		
		}else if($core_use=="yzx"){
			if($pages_use==1){
				echo "<img src=images/core/core_x1.jpg width=271 height=260/>";
			}else if($pages_use==2){
				echo "<img src=images/core/core_x2.jpg width=271 height=260/>";
			}else if($pages_use==3){
				echo "<img src=images/core/core_x3.jpg width=271 height=260/>";
			}else if($pages_use==4){
				echo "<img src=images/core/core_x4.jpg width=271 height=260/>";
			}else if($pages_use==5){
				echo "<img src=images/core/core_x5.jpg width=271 height=260/>";
			}else if($pages_use==6){
				echo "<img src=images/core/core_x6.jpg width=271 height=260/>";
			}else if($pages_use==7){
				echo "<img src=images/core/core_x7.jpg width=271 height=260/>";
			}else if($pages_use==8){
				echo "<img src=images/core/core_x8.jpg width=271 height=260/>";
			}else if($pages_use==9){
				echo "<img src=images/core/core_x9.jpg width=271 height=260/>";
			}
		
		}else if($core_use=="zxy"){
			if($pages_use==1){
				echo "<img src=images/core/core_y1.jpg width=271 height=260/>";
			}else if($pages_use==2){
				echo "<img src=images/core/core_y2.jpg width=271 height=260/>";
			}else if($pages_use==3){
				echo "<img src=images/core/core_y3.jpg width=271 height=260/>";
			}else if($pages_use==4){
				echo "<img src=images/core/core_y4.jpg width=271 height=260/>";
			}else if($pages_use==5){
				echo "<img src=images/core/core_y5.jpg width=271 height=260/>";
			}else if($pages_use==6){
				echo "<img src=images/core/core_y6.jpg width=271 height=260/>";
			}else if($pages_use==7){
				echo "<img src=images/core/core_y7.jpg width=271 height=260/>";
			}else if($pages_use==8){
				echo "<img src=images/core/core_y8.jpg width=271 height=260/>";
			}else if($pages_use==9){
				echo "<img src=images/core/core_y9.jpg width=271 height=260/>";
			}
		
		}
}
?>
</body>
</html>
