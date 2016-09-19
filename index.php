<?php 

// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

error_reporting (E_ALL ^ E_NOTICE);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);



if (!isset($_COOKIE["username"])) {
}else{
	header("Location: main.php");
}

$lang = "this";		
if($lang=="en"){ 
	include "language/lang-en.php";
}else if($lang=="th"){
	include "language/lang-th.php";
}else{
	include "language/lang-en.php";
}

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$hid_name = isset($_POST['hid_name']) ? $_POST['hid_name'] : '';

if($hid_name=="1"){

	if($username==""){
			$status_loin = "<span class=jang>"._NOUSER."</span>";
			//echo "<meta http-equiv=refresh content=3;URL=index.php>";
	}else if($password==""){
			$status_loin = "<span class=jang>"._NOPASS."</span>";
			//echo "<meta http-equiv=refresh content=3;URL=index.php>";
		}else{

			require('include/connect.php');
					$sql_check = "select * from tb_user where name_user ='$username'  and password='$password' "; 
					$result_check = mysql_query($sql_check); 
					$Num_Rows = mysql_num_rows($result_check); 

			if($Num_Rows <=0) {
					$status_loin = "<span class=jang>"._CAHECKNAME."</span>";  
					//echo "<meta http-equiv=refresh content=3;URL=index.php>";
					}else{
							$username = $_POST["username"];
							setcookie("username",$username,time()+3600*24*356);
							//$ran = 1;
							$result = mysql_query($sql);
							header("Location: main.php");						
							}
			
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/login.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.easing-1.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<title>:: 3D Sudoku ::</title>
<script type="text/javascript">

$(document).ready(function() {
			$("#edit_pic").fancybox({
				'width'				: '25%',
				'height'			: '30%',
			});
});
$(document).ready(function() {
			$("#edit_pic").fancybox({
				'width'				: '25%',
				'height'			: '30%',
			});
});


$(document).ready(function() {
			$("#iframe").fancybox({
				'width'				: '30%',
				'height'			: '50%',
				'autoScale'     	: 'true',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
			});

		});
</script>
<script language="javascript">
function aa()
{
	if(document.form1.username.value == ""){		
		alert('กรุณาใส่ ชื่อ ของท่านก่อนครับ');		
				
			return false;	
	}else if(document.form1.password.value == ""){		
		alert('กรุณาใส่ รหัสผ่าน ของท่านก่อนครับ');			
			return false;		
			}
			}
	</script>		
</head>
<body >
<center>
<div id="maincontent">
	<div id="loginform">
		<h2><span class="h2"><a href="login_check.php" title="3D Sudoku">3D Sudoku</a></span></h2>
	  <p><span class="txt_detail"><?php  echo _USENAMEYOU; ?></span></p>
			<p>
			
			<div>
			<a class="various iframe" id="edit_pic" href="register.php" title="<?php  echo _MEMBER; ?>"><span class="pic_chang">[<?php  echo _MEMBER; ?>]</span></a>   			  </div> 
            <form name="form1" method="post" action="index.php">
			  <font color="#66ba08"><?php  echo _NAMEMEMBER; ?></font>
			  <input type="text" name="username" id="txtName"/>
			   <br>
			   <font color="#66ba08"><?php  echo _PASSMEMBER; ?></font>
			   <input type="password" name="password" id="txtName"/>
				<br />
				
				<input type="hidden" name="hid_name" id="hid_name" value="1">
                <input name="submit" type="submit" class="bt-green" value="<?php  echo _LOGINTO; ?>" />
            </form>
	
	  <?php  echo isset($status_loin) ? $status_loin : '' ; ?>
                <br />
                 <span id="mySpan"></span><br />
			</p>
	</div>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
    </div></center>
</body>

</html>
