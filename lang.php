<?php


if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
}
$name_user = $_COOKIE["username"];
require('include/connect.php');
		$sql_lang = "SELECT * FROM tb_user WHERE name_user = '$name_user' ORDER BY id DESC LIMIT 1";
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

$radio = isset($_POST['radio']) ? $_POST['radio'] : '';
$hid = isset($_POST['hid']) ? $_POST['hid'] : '' ;
if($hid==1){
require('include/connect.php');
$sql = "UPDATE tb_user SET lang='$radio' WHERE name_user='$name_user'";
$result = mysql_query($sql);
}else{
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/view_score.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<title>Untitled Document</title>
</head>

<body>
<span class="text_text_view_user"><?php  echo _CLICKKEY; ?> [Esc Key To Exit] </span>
<table width="171" border="0">
  <tr>
    <td width="165" height="132"><form id="form1" name="form1" method="post" action="lang.php">
    <input name="hid" type="hidden" value="1" />
      <table width="165" border="0">
        <tr>
          <td width="75"><img src="images/thai-lang.gif" width="75" height="47" /></td>
          <td width="75"><img src="images/eng-lang.gif" width="75" height="47" /></td>
          <td width="1" rowspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="75" align="center"><input name="radio" type="radio" id="radio" value="th" checked="checked" /></td>
          <td align="center"><input type="radio" name="radio" id="radio2" value="en" /></td>
          </tr>
        <tr>
          <td colspan="3"><table width="156" border="0">
            <tr>
              <td width="146" align="center"><INPUT TYPE="Submit" value="<?php  echo _YOUOK; ?>" class="bt-green1"></td>
            </tr>
          </table></td>
          </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
