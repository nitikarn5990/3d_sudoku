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
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
function check_pages(id) {
		var check = $("#add" + id).val();
		$.ajax({
				type: "POST",
				url: "pages_check.php",
				data: {
				check: check
			},
					cache: false,
					success: function(data){
						$("#show_pages").html(data);
					}
			 });			
}
</script>
</head>

<body>
<?php 
if($_POST['pagesfile']==1){ 
		require('include/connect.php');
		$sql = "SELECT * FROM tb_pages WHERE name_user='$name_user'";
		$result = mysql_query($sql);
		while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
		{
			 $cop = $rec['pages'];
			 if($cop==1){$cop1 = "<font color=red size=3>[1]</font>";}else{$cop1 = "1";}
			 if($cop==2){$cop2 = "<font color=red size=3>[2]</font>";}else{$cop2 = "2";}
			 if($cop==3){$cop3 = "<font color=red size=3>[3]</font>";}else{$cop3 = "3";}
			 if($cop==4){$cop4 = "<font color=red size=3>[4]</font>";}else{$cop4 = "4";}
			 if($cop==5){$cop5 = "<font color=red size=3>[5]</font>";}else{$cop5 = "5";}
			 if($cop==6){$cop6 = "<font color=red size=3>[6]</font>";}else{$cop6 = "6";}
			 if($cop==7){$cop7 = "<font color=red size=3>[7]</font>";}else{$cop7 = "7";}
			 if($cop==8){$cop8 = "<font color=red size=3>[8]</font>";}else{$cop8 = "8";}
			 if($cop==9){$cop9 = "<font color=red size=3>[9]</font>";}else{$cop9 = "9";}
		}
	
?>
			<input name="add" type="hidden" id="add4" value="1" />
            <input name="add" type="hidden" id="add5" value="2" />
            <input name="add" type="hidden" id="add6" value="3" />
            <input name="add" type="hidden" id="add7" value="4" />
            <input name="add" type="hidden" id="add8" value="5" />
            <input name="add" type="hidden" id="add9" value="6" />
            <input name="add" type="hidden" id="add10" value="7" />
            <input name="add" type="hidden" id="add11" value="8" />
            <input name="add" type="hidden" id="add12" value="9" />
            <a href="#" title="<?php  echo _PLAYPANUSE; ?> 1" onclick="check_pages(4);"><span class="add_num"><?php  echo $cop1; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYPANUSE; ?> 2" onclick="check_pages(5);"><span class="add_num"><?php  echo $cop2; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYPANUSE; ?> 3"  onclick="check_pages(6);"><span class="add_num"><?php  echo $cop3; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYPANUSE; ?> 4" onclick="check_pages(7);"><span class="add_num"><?php  echo $cop4; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYPANUSE; ?> 5" onclick="check_pages(8);"><span class="add_num"><?php  echo $cop5; ?></span></a><font color="#0E2F50"> | </font> <a href="#" title="<?php  echo _PLAYPANUSE; ?> 6" onclick="check_pages(9);"><span class="add_num"><?php  echo $cop6; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYPANUSE; ?> 7" onclick="check_pages(10);"><span class="add_num"><?php  echo $cop7; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYPANUSE; ?> 8" onclick="check_pages(11);"><span class="add_num"><?php  echo $cop8; ?></span></a><font color="#0E2F50"> | </font><a href="#" title="<?php  echo _PLAYPANUSE; ?> 9" onclick="check_pages(12);"><span class="add_num"><?php  echo $cop9; ?></span></a>
<?php  } ?>
</body>
</html>
