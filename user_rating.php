<?php
if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
}
$name_user = $_COOKIE["username"];
require('include/connect.php');
		$sql_lang = "SELECT * FROM tb_user WHERE name_user='$name_user' ORDER BY id DESC LIMIT 1";
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
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bartop.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/user_score.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
////////slide user//////
$.fn.infiniteCarousel = function () {
 
    function repeat(str, num) {
        return new Array( num + 1 ).join( str );
    }
    return this.each(function () {
        var $wrapper = $('> div', this).css('overflow', 'hidden'),
            $slider = $wrapper.find('> ul'),
            $items = $slider.find('> li'),
            $single = $items.filter(':first'),
            singleWidth = $single.outerWidth(), 
            visible = Math.ceil($wrapper.innerWidth() / singleWidth),
            currentPage = 1,
            pages = Math.ceil($items.length / visible);            
        if (($items.length % visible) != 0) {
            $slider.append(repeat('<li class="empty" />', visible - ($items.length % visible)));
            $items = $slider.find('> li');
        }
        $items.filter(':first').before($items.slice(- visible).clone().addClass('cloned'));
        $items.filter(':last').after($items.slice(0, visible).clone().addClass('cloned'));
        $items = $slider.find('> li'); // reselect
        $wrapper.scrollLeft(singleWidth * visible);
        function gotoPage(page) {
            var dir = page < currentPage ? -1 : 1,
                n = Math.abs(currentPage - page),
                left = singleWidth * dir * visible * n;
            $wrapper.filter(':not(:animated)').animate({
                scrollLeft : '+=' + left
            }, 500, function () {
                if (page == 0) {
                    $wrapper.scrollLeft(singleWidth * visible * pages);
                    page = pages;
                } else if (page > pages) {
                    $wrapper.scrollLeft(singleWidth * visible);
                    page = 1;
                } 
                currentPage = page;
            });                
            
            return false;
        }
        $wrapper.after('<a class="arrow back">&lt;</a><a class="arrow forward">&gt;</a>');
        $('a.back', this).click(function () {
            return gotoPage(currentPage - 1);                
        });
        $('a.forward', this).click(function () {
            return gotoPage(currentPage + 1);
        });
        $(this).bind('goto', function (event, page) {
            gotoPage(page);
        });
    });  
};
$(document).ready(function () {
  $('.infiniteCarousel').infiniteCarousel();
});


</script>

<!--[if lt IE 7]>
 <style type="text/css">
 div, img { behavior: url(iepngfix.htc) }
 </style>
<![endif]-->
<title>Untitled Document</title>
</head>
<body>
<?php 
if($_POST['rating']==1){ 
	$room = 1;
	require('include/connect.php');
	$sql = "SELECT * FROM tb_user ORDER BY score_ture DESC";
	$result = mysql_query($sql);
?>
		<div class="infiniteCarousel">
                   <div id="wrapper">
                      <ul>
<?php 
	$i = 1;
	while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
	{
			$pic = $rec['img_pic'];
			if($pic==""){
				$pic_profile = "<img src=images/noguy.png width=50 height=50>";
			}else{
				$pic_profile = "<img src=images/profile/$pic width=50 height=50>";
			}
							  echo "<li>";
							  echo 			"<div class=user_score>";
							  echo              "<div id=pic>$pic_profile</div>";
							  echo              "<div class=user_score_id>$rec[name_user]<br><span class=text_text_rating>"._RKTEE." $i</span></div>";
							  echo          "</div>";
							  echo "</li>";  
	
	$i++;
	}
}
?>
					  </ul>
                   </div>
         </div>	
</body>
</html>
