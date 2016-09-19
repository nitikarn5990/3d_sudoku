<?php
if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
	 
}
$name_user=$_COOKIE["username"];
?>

<?php 

	if ((($_FILES["uploadedfile"]["type"] == "image/gif")
	|| ($_FILES["uploadedfile"]["type"] == "image/jpeg"))
	&& ($_FILES["uploadedfile"]["size"] < 1000000)){

	$target_path = "images/profile/";
	$file_name  = basename( $_FILES['uploadedfile']['name']);
	$target_path = $target_path . $file_name; 
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
	
require('include/connect.php');
	$sql = "update tb_user set img_pic='$file_name' where name_user='$name_user' ";
	$dbquery = mysql_db_query($database_conn, $sql);

	echo "<center>Change the picture successfully<br></center>";
	
		}else  {
	echo "<br><center>No change the picture</center>";
	}
	}
else{
  echo "<br><center>No change the picture</center>";
	
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


