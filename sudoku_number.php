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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
function check_sudo_multi(id) {
		var check = $("#addsu" + id).val();
		$.ajax({
				type: "POST",
				url: "sudokumulti_check.php",
				data: {
				check: check
			},
					cache: false,
					success: function(data){
						$("#show_pages2").html(data);
					}
			 });			
}
</script>
</head>

<body>
<?php 
if($_POST['sudokunumber']==1){ 
		require('include/connect.php');
		$sql = "SELECT * FROM tb_pages WHERE name_user='$name_user'";
		$result = mysql_query($sql);
		while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
		{
			 $cop = $rec['id_room'];
			 if($cop==1){$cop1 = "<font color=red size=3>[1]</font>";}else{$cop1 = "1";}
			 if($cop==2){$cop2 = "<font color=red size=3>[2]</font>";}else{$cop2 = "2";}
			 if($cop==3){$cop3 = "<font color=red size=3>[3]</font>";}else{$cop3 = "3";}
			 if($cop==4){$cop4 = "<font color=red size=3>[4]</font>";}else{$cop4 = "4";}
			 if($cop==5){$cop5 = "<font color=red size=3>[5]</font>";}else{$cop5 = "5";}
			 if($cop==6){$cop6 = "<font color=red size=3>[6]</font>";}else{$cop6 = "6";}
			 if($cop==7){$cop7 = "<font color=red size=3>[7]</font>";}else{$cop7 = "7";}
			 if($cop==8){$cop8 = "<font color=red size=3>[8]</font>";}else{$cop8 = "8";}
			 if($cop==9){$cop9 = "<font color=red size=3>[9]</font>";}else{$cop9 = "9";}
			 if($cop==10){$cop10 = "<font color=red size=3>[10]</font>";}else{$cop10 = "10";}
		}
	
?>
			<input name="addsu" type="hidden" id="addsu4" value="1" />
            <input name="addsu" type="hidden" id="addsu5" value="2" />
            <input name="addsu" type="hidden" id="addsu6" value="3" />
            <input name="addsu" type="hidden" id="addsu7" value="4" />
            <input name="addsu" type="hidden" id="addsu8" value="5" />
            <input name="addsu" type="hidden" id="addsu9" value="6" />
            <input name="addsu" type="hidden" id="addsu10" value="7" />
            <input name="addsu" type="hidden" id="addsu11" value="8" />
            <input name="addsu" type="hidden" id="addsu12" value="9" />
            <input name="addsu" type="hidden" id="addsu13" value="10" />

            <a href="#" title="<?php  echo _PLAYBALLIS; ?> 1" onclick="check_sudo_multi(4);"><span class="addsu_num"><?php  echo $cop1; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYBALLIS; ?> 2" onclick="check_sudo_multi(5);"><span class="addsu_num"><?php  echo $cop2; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYBALLIS; ?> 3"  onclick="check_sudo_multi(6);"><span class="addsu_num"><?php  echo $cop3; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYBALLIS; ?> 4" onclick="check_sudo_multi(7);"><span class="addsu_num"><?php  echo $cop4; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYBALLIS; ?> 5" onclick="check_sudo_multi(8);"><span class="addsu_num"><?php  echo $cop5; ?></span></a><font color="#0E2F50"> | </font> <a href="#" title="<?php  echo _PLAYBALLIS; ?> 6" onclick="check_sudo_multi(9);"><span class="addsu_num"><?php  echo $cop6; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYBALLIS; ?> 7" onclick="check_sudo_multi(10);"><span class="addsu_num"><?php  echo $cop7; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYBALLIS; ?> 8" onclick="check_sudo_multi(11);"><span class="addsu_num"><?php  echo $cop8; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYBALLIS; ?> 9" onclick="check_sudo_multi(12);"><span class="addsu_num"><?php  echo $cop9; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYBALLIS; ?> 10" onclick="check_sudo_multi(13);"><span class="addsu_num"><?php  echo $cop10; ?></span></a>
<?php  } ?>
</body>
</html>
