<?php
if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
}
$user_name = $_COOKIE["username"];
require('include/connect.php');
		$sql_lang = "SELECT * FROM tb_user WHERE name_user='$user_name' ORDER BY id DESC LIMIT 1";
		$result_lang = mysql_query($sql_lang);
		while ($rec_lang = mysql_fetch_array($result_lang,MYSQL_ASSOC))
		{
			$lang = $rec_lang['lang'];
		}
		
if($lang=="en"){ 
	include "language/lang-en.php";
}else if($lang=="th"){
	include "language/lang-th.php";
}else{
	include "language/lang-en.php";
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">

$(document).ready(function() {
			$("#edit_pic").fancybox({
				'width'				: '35%',
				'height'			: '30%',
				'autoScale'     	: 'true',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
			});

		});
</script>
<title>Untitled Document</title>
</head>
<body>
<?php 
if($_POST['profile']==1){ 
		require('include/connect.php');
		$sql = "SELECT * FROM tb_user WHERE name_user = '$user_name' LIMIT 1";
		$result = mysql_query($sql);
		$num_row = mysql_num_rows($result);
		while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
		{
			$name = $rec['name_user'];
			$date_time = $rec['use_time'];
			$num_true = $rec['score_ture'];
			$num_false = $rec['score_false'];
			$pic = $rec['img_pic'];
			if($pic==""){
				$pic_profile = "<img src=images/noguy_profile.png width=80 height=85>";
			}else{
				$pic_profile = "<img src=images/profile/$pic width=80 height=85>";
			}
		}
		
		$sql_core = "SELECT * FROM tb_pages WHERE name_user='$user_name' LIMIT 1";
		$result_core = mysql_query($sql_core);
		while ($rec_core = mysql_fetch_array($result_core,MYSQL_ASSOC))
		{
			$room = $rec_core['id_room'];
		}
		
		require('include/connect.php');
		$sql_su = "SELECT * FROM tb_sudoku WHERE room='$room'";
		$result_su = mysql_query($sql_su);
		$num_row_su = mysql_num_rows($result_su);
		$su_f = 0;
		$su_t = 0;
		while ($rec_su = mysql_fetch_array($result_su,MYSQL_ASSOC))
		{
			if($rec_su['othor']=="F"){
				$su_f = $su_f + 1;				
			}
			
			if($rec_su['user_up']=="T"){
				$su_t = $su_t + 1;				
			}
		}	
		$su_tf = $su_f - $su_t;
		if($su_tf>=500){
			$font_color = "<font color=#2cc51c>";
		}else if($su_tf>=250){
			$font_color = "<font color=#d79904>";
		}else{
			$font_color = "<font color=#d70909>";
		}
?>
<div id="profileleft">
    <div id="pic_profile"><?php  echo $pic_profile; ?></div>
 </div>
        <div id="profileright">
             <p><?php  echo _NAMEYOU; ?><b><font color="#0E2F50"><?php  echo "$name "; ?></font></b></p>
             <p><?php  echo _STARTGAME; ?><b><font color="#0E2F50" ><?php  echo "$date_time "; ?></font></b></p>
             <p><?php  echo _TIMEPRE; ?><b><font color="#0E2F50"><?php  echo "".date("Y-m-d H:i:s"); ?></font></b></p>
             <p><?php  echo _SCOREALL; ?><b><font color="#009900"><?php  echo "$num_true "; ?></font></b><?php  echo _SCORE; ?></p>
             <p><?php  echo _FLASTYOU; ?><b><font color="#CC0033"><?php  echo "$num_false "; ?></font></b><?php  echo _KUNK; ?></p>
             <p><?php  echo _USEPLAYBALL; ?><b><font color="#CC0033"><?php  echo "$room "; ?></font></b><?php  echo _MEALL; ?><b><font color="#009900"><?php  echo " $num_row_su "; ?></font></b><?php  echo _CHANNEL; ?></p>
             <p><?php  echo _RECHANNEL; ?><b><?php  echo "$font_color"; ?><?php  echo "$su_tf "; ?></font></b><?php  echo _CHANNEL; ?></p>
        </div>
<?php  } ?>
</body>
</html>
