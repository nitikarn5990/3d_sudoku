<?php 
if (!isset($_COOKIE["username"])) {
}else{
	header("Location: main.php");
}
require('include/connect.php');
$name_user = '';
$lang = '';
		$sql_lang = "SELECT * FROM tb_user WHERE name_user = '$name_user' ORDER BY id DESC LIMIT 1";
		$result_lang = mysql_query($sql_lang);
		while ($rec_lang = mysql_fetch_array($result_lang,MYSQL_ASSOC))
		{
			echo $lang = $rec_lang['lang'];
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
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/view_score.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />

<title>Untitled Document</title>
<script type="text/javascript">


$(document).ready(function() {
			$("#edit_pic").fancybox({
				'width'				: '30%',
				'height'			: '30%',
				'autoScale'     	: 'true',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe',
			});

		});
</script>
</head>

<body>
<p class="text_text_view_user"><?php  echo _CLICKKEY; ?> [Esc Key To Exit]</p>
<FORM METHOD="POST" ACTION="register_check.php">
<TABLE CELLSPACING="2"> <div id=viewright>
    <TR>
      <TD width="68" class="text_text_view_true"><?php  echo _NAMEMEMBER; ?></TD>
	  <TD width="410"><INPUT NAME="user_reg" TYPE="text" id="txtName"> * </TD>
    </TR>
    <TR> 
      <TD class="text_text_view_true"><?php  echo _PASSMEMBER; ?></TD>
      <TD><INPUT NAME="pass_reg" TYPE="password" id="txtName"> * </TD>
    </TR>
	<TR>   
      <TD>&nbsp;</TD>
      <TD><INPUT TYPE="Submit" value="<?php  echo _YOUOK; ?>" class="bt-green1"> <INPUT TYPE="Reset" value="<?php  echo _YOURESET; ?>" class="bt-green1"></TD>
    </TR></div>
</TABLE>
</FORM>

 
</body>
</html>
