<?php
if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
	 
}
$name_user=$_COOKIE["username"];
?>

<?php 
if($hidAction == "Add") {

	$date = date("U");
	if($file != "") {
		$type = getimagesize($file);
		if($type[2] == 1) {
			$image = $date."_img.gif";
		} else if($type[2] == 2) {
			$image = $date."_img.jpg";
		}
		copy($file, "images/profile/$image");
		chmod("images/profile/$image", 0664);
	}
	
	require('include/connect.php');
	$sql = "update tb_user set img_pic='$image' where name_user='$name_user' ";
	$dbquery = mysql_db_query($database_conn, $sql);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
