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
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/view_score.css" rel="stylesheet" type="text/css" media="all" />
<title>Untitled Document</title>
</head>
<body>
<span class="text_text_view_user"><?php  echo _CLICKKEY; ?> [Esc Key To Exit] </span>
<?php 
	require('include/connect.php');
	$sql = "SELECT * FROM tb_user ORDER BY score_ture DESC";
	$result = mysql_query($sql);
	$i = 1;
	while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
	{
			$name = $rec['name_user'];
			$num_true = $rec['score_ture'];
			$num_false = $rec['score_false'];
			$pic = $rec['img_pic'];
			if($pic==""){
				$pic_profile = "<img src=images/noguy_viewscore.png width=80 height=75>";
			}else{
				$pic_profile = "<img src=images/profile/$pic width=80 height=75>";
			}
?>
	<div class=view_score>
	           <div id="viewleft">
                 <div id=pic_profile><?php  echo "$pic_profile"; ?></div>
             	</div>
                      <div id=viewright>
                              <p><?php  echo _NAME; ?><span class="text_text_view_user"><b><?php  echo " $name "; ?></b></span></p>
                               <p><?php  echo _SCOREYOU; ?><span class="text_text_view_true"><b><?php  echo " $num_true "; ?></b></span><?php  echo _SCORE;?></p>
                               <p><?php  echo _FALSTALL; ?><span class="text_text_view_false"><b><?php  echo " $num_false "; ?></b></span><?php  echo _KUNK; ?></p>
                               <p><?php  echo _RKUSEYOU; ?><span class="text_text_view_rating"><b><?php  echo " $i "; ?></b></span></p>
                       </div>
   </div>  
<?php 
$i++;       
}
?>

</div>
</body>
</html>
