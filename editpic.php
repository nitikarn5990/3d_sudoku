<?php  
header("content-type: text/html; charset=UTF-8");
if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
}
$user_name = $_COOKIE["username"];
require('include/connect.php');
		$sql_lang = "SELECT * FROM tb_user WHERE name_user = '$user_name' ORDER BY id DESC LIMIT 1";
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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
 <link href="css/view_score.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />

 </HEAD>

 <BODY>
 <p class="text_text_view_user"><?php  echo _CLICKKEY; ?> [Esc Key To Exit]</p>

  <form enctype="multipart/form-data" action="uploader.php" method="POST">
    
      <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
      <input name="uploadedfile" type="file"  class="bt-green1"/>
      <input name="submit" type="submit" class="bt-blue" value="<?php  echo _YOUOK; ?>" />
    </p>
  <p>&nbsp;</p>
  </form>
 </BODY>
</HTML>

