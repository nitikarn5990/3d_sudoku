<?php
if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
}
$name_user =$_COOKIE["username"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/sudoku_main.css" type=text/css rel=stylesheet>
<title>Untitled Document</title>
</head>
<body>
<p>
<?php 
if($_POST['sudo_usefile']==1){ 
	require('include/connect.php');
	$sql = "SELECT * FROM tb_pages WHERE name_user='$name_user' ORDER BY id DESC";
	$result = mysql_query($sql);
	while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
	{	
		$name = $rec['name_user'];
		$core = $rec['core'];
		$pages = $rec['pages'];
		$id_room = $rec['id_room'];
		$room = $id_room;	
	
	}
	


?>
  <input name="room" type="hidden" id="room" value="<?php  echo $room; ?>">
</p>
<?php 
if($name==$name_user){
	if($core=="xyz"){
 			if($pages==1){
		
?>
<div id="stylized1" class="myform1">
  <table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
      <?php  ////// x, y, z, ค่า num ของ id ต้องไม่ซ้ำ ?>
        <td width="49"><?php  sudoku_check_db(1,1,1,1,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,1,2,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,1,3,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,1,10,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,1,11,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,1,12,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,1,19,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,1,20,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,1,21,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,1,4,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,1,5,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,1,6,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,1,13,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,1,14,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,1,15,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,1,22,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,1,23,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,1,24,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,1,7,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,1,8,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,1,9,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,1,16,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,1,17,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,1,18,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,1,25,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,1,26,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,1,27,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,1,28,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,1,29,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,1,30,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,1,37,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,1,38,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,1,39,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,1,46,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,1,47,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,1,48,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,1,31,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,1,32,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,1,33,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,1,40,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,1,41,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,1,42,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,1,49,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,1,50,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,1,51,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,1,34,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,1,35,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,1,36,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,1,43,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,1,44,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,1,45,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,1,52,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,1,53,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,1,54,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,1,55,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,1,56,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,1,57,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,1,64,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,1,65,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,1,66,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,1,73,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,1,74,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,1,75,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,1,58,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,1,59,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,1,60,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,1,67,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,1,68,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,1,69,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,1,76,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,1,77,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,1,78,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,1,61,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,1,62,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,1,63,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,1,70,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,1,71,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,1,72,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,1,79,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,1,80,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,1,81,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  } ?>
<?php 
	if($pages==2){
?>
<div id="stylized1" class="myform1">
  <table width="300" border="0" cellpadding="0" cellspacing="0">

    <tr>
      <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,1,2,82,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,1,2,83,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,1,2,84,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,2,2,91,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,2,2,92,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,2,2,93,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,3,2,100,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,3,2,101,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,3,2,102,$room); ?></td>
          </tr>
      </table></td>
      <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,1,2,85,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,1,2,86,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,1,2,87,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,2,2,94,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,2,2,95,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,2,2,96,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,3,2,103,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,3,2,104,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,3,2,105,$room); ?></td>
          </tr>
      </table></td>
      <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,1,2,88,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,1,2,89,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,1,2,90,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,2,2,97,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,2,2,98,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,2,2,99,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,3,2,106,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,3,2,107,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,3,2,108,$room); ?></td>
          </tr>
      </table></td>
    </tr>

    <tr>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,4,2,109,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,4,2,110,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,4,2,111,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,5,2,118,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,5,2,119,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,5,2,120,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,6,2,127,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,6,2,128,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,6,2,129,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,4,2,112,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,4,2,113,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,4,2,114,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,5,2,121,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,5,2,122,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,5,2,123,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,6,2,130,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,6,2,131,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,6,2,132,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,4,2,115,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,4,2,116,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,4,2,117,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,5,2,124,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,5,2,125,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,5,2,126,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,6,2,133,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,6,2,134,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,6,2,135,$room); ?></td>
          </tr>
      </table></td>
    </tr>

    <tr>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,7,2,136,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,7,2,137,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,7,2,138,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,8,2,145,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,8,2,146,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,8,2,147,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,9,2,154,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,9,2,155,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,9,2,156,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,7,2,139,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,7,2,140,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,7,2,141,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,8,2,148,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,8,2,149,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,8,2,150,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,9,2,157,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,9,2,158,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,9,2,159,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,7,2,142,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,7,2,143,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,7,2,144,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,8,2,151,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,8,2,152,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,8,2,153,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,9,2,160,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,9,2,161,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,9,2,162,$room); ?></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
<?php  } ?>
<?php 
	if($pages==3){
?>
<div id="stylized1" class="myform1">
  <table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,3,163,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,3,164,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,3,165,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,3,172,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,3,173,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,3,174,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,3,181,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,3,182,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,3,183,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,3,166,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,3,167,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,3,168,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,3,175,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,3,176,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,3,177,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,3,184,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,3,185,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,3,186,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,3,169,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,3,170,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,3,171,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,3,178,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,3,179,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,3,180,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,3,187,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,3,188,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,3,189,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,3,190,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,3,191,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,3,192,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,3,199,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,3,200,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,3,201,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,3,208,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,3,209,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,3,210,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,3,193,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,3,194,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,3,195,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,3,202,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,3,203,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,3,204,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,3,211,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,3,212,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,3,213,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,3,196,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,3,197,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,3,198,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,3,205,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,3,206,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,3,207,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,3,214,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,3,245,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,3,216,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,3,217,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,3,218,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,3,219,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,3,226,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,3,227,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,3,228,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,3,235,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,3,236,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,3,237,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,3,220,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,3,221,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,3,222,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,3,229,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,3,230,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,3,231,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,3,238,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,3,239,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,3,240,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,3,223,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,3,224,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,3,225,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,3,232,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,3,233,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,3,234,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,3,241,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,3,242,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,3,243,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  } ?>
<?php 
	if($pages==4){
?>
<div id="stylized1" class="myform1">
  <table width="300" border="0" cellpadding="0" cellspacing="0">

    <tr>
      <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,1,4,244,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,1,4,245,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,1,4,246,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,2,4,253,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,2,4,254,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,2,4,255,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,3,4,262,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,3,4,263,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,3,4,264,$room); ?></td>
          </tr>
      </table></td>
      <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,1,4,247,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,1,4,248,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,1,4,249,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,2,4,256,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,2,4,257,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,2,4,258,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,3,4,265,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,3,4,266,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,3,4,267,$room); ?></td>
          </tr>
      </table></td>
      <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,1,4,250,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,1,4,251,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,1,4,252,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,2,4,259,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,2,4,260,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,2,4,261,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,3,4,268,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,3,4,269,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,3,4,270,$room); ?></td>
          </tr>
      </table></td>
    </tr>

    <tr>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,4,4,271,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,4,4,272,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,4,4,273,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,5,4,280,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,5,4,281,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,5,4,282,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,6,4,289,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,6,4,290,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,6,4,291,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,4,4,274,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,4,4,275,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,4,4,276,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,5,4,283,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,5,4,284,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,5,4,285,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,6,4,292,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,6,4,293,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,6,4,294,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,4,4,277,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,4,4,278,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,4,4,279,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,5,4,286,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,5,4,287,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,5,4,288,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,6,4,295,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,6,4,296,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,6,4,297,$room); ?></td>
          </tr>
      </table></td>
    </tr>

    <tr>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,7,4,298,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,7,4,299,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,7,4,300,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,8,4,307,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,8,4,308,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,8,4,309,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,9,4,316,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,9,4,317,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,9,4,318,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,7,4,301,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,7,4,301,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,7,4,303,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,8,4,310,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,8,4,311,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,8,4,312,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,9,4,319,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,9,4,320,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,9,4,321,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,7,4,304,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,7,4,305,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,7,4,306,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,8,4,313,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,8,4,314,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,8,4,315,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,9,4,322,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,9,4,323,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,9,4,324,$room); ?></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
<?php  } ?>
<?php 
	if($pages==5){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,5,325,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,5,326,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,5,327,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,5,334,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,5,335,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,5,336,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,5,343,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,5,344,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,5,345,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,5,328,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,5,329,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,5,330,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,5,337,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,5,338,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,5,339,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,5,346,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,5,347,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,5,348,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,5,331,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,5,332,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,5,333,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,5,340,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,5,341,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,5,342,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,5,349,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,5,350,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,5,351,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,5,352,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,5,353,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,5,354,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,5,361,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,5,362,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,5,363,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,5,370,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,5,371,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,5,372,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,5,355,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,5,356,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,5,357,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,5,364,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,5,365,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,5,366,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,5,373,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,5,374,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,5,375,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,5,358,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,5,359,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,5,360,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,5,367,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,5,368,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,5,369,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,5,376,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,5,377,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,5,378,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,5,379,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,5,380,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,5,381,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,5,388,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,5,389,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,5,390,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,5,397,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,5,398,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,5,399,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,5,382,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,5,383,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,5,384,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,5,391,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,5,392,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,5,393,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,5,400,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,5,401,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,5,402,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,5,385,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,5,386,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,5,387,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,5,394,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,5,395,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,5,396,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,5,403,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,5,404,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,5,405,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  } ?>
<?php 
	if($pages==6){
?>
<div id="stylized1" class="myform1">
  <table width="300" border="0" cellpadding="0" cellspacing="0">

    <tr>
      <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,1,6,406,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,1,6,407,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,1,6,408,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,2,6,415,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,2,6,416,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,2,6,417,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,3,6,424,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,3,6,425,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,3,6,426,$room); ?></td>
          </tr>
      </table></td>
      <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,1,6,409,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,1,6,410,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,1,6,411,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,2,6,418,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,2,6,419,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,2,6,420,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,3,6,427,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,3,6,428,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,3,6,429,$room); ?></td>
          </tr>
      </table></td>
      <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,1,6,412,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,1,6,413,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,1,6,414,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,2,6,421,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,2,6,422,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,2,6,423,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,3,6,430,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,3,6,431,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,3,6,432,$room); ?></td>
          </tr>
      </table></td>
    </tr>

    <tr>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,4,6,433,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,4,6,434,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,4,6,435,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,5,6,442,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,5,6,443,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,5,6,444,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,6,6,451,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,6,6,452,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,6,6,453,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,4,6,436,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,4,6,437,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,4,6,438,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,5,6,445,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,5,6,446,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,5,6,447,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,6,6,454,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,6,6,455,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,6,6,456,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,4,6,439,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,4,6,440,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,4,6,441,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,5,6,448,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,5,6,449,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,5,6,450,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,6,6,457,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,6,6,458,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,6,6,459,$room); ?></td>
          </tr>
      </table></td>
    </tr>

    <tr>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,7,6,460,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,7,6,461,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,7,6,462,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,8,6,469,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,8,6,470,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,8,6,471,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,9,6,478,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,9,6,479,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,9,6,480,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,7,6,463,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,7,6,464,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,7,6,465,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,8,6,472,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,8,6,473,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,8,6,474,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,9,6,481,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,9,6,482,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,9,6,483,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,7,6,466,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,7,6,467,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,7,6,468,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,8,6,475,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,8,6,476,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,8,6,477,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,9,6,484,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,9,6,485,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,9,6,486,$room); ?></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
<?php  } ?>
<?php 
	if($pages==7){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,7,487,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,7,488,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,7,489,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,7,496,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,7,497,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,7,498,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,7,505,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,7,506,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,7,507,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,7,490,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,7,491,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,7,492,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,7,499,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,7,500,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,7,501,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,7,508,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,7,509,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,7,510,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,7,493,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,7,494,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,7,495,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,7,502,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,7,503,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,7,504,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,7,511,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,7,512,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,7,513,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,7,514,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,7,515,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,7,516,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,7,523,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,7,524,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,7,525,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,7,532,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,7,533,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,7,534,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,7,517,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,7,518,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,7,519,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,7,526,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,7,527,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,7,528,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,7,535,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,7,536,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,7,537,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,7,520,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,7,521,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,7,522,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,7,529,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,7,530,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,7,531,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,7,538,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,7,539,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,7,540,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,7,541,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,7,542,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,7,543,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,7,550,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,7,551,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,7,552,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,7,559,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,7,560,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,7,561,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,7,544,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,7,545,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,7,546,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,7,553,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,7,554,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,7,555,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,7,562,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,7,563,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,7,564,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,7,547,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,7,548,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,7,549,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,7,556,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,7,557,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,7,558,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,7,565,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,7,566,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,7,567,$room); ?></td>
       </tr
    ></table></td>
  </tr>
</table>
</div>
<?php  } ?>
<?php 
	if($pages==8){
?>
<div id="stylized1" class="myform1">
  <table width="300" border="0" cellpadding="0" cellspacing="0">

    <tr>
      <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,1,8,568,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,1,8,569,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,1,8,570,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,2,8,577,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,2,8,578,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,2,8,579,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,3,8,586,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,3,8,587,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,3,8,588,$room); ?></td>
          </tr>
      </table></td>
      <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,1,8,571,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,1,8,572,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,1,8,573,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,2,8,580,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,2,8,581,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,2,8,582,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,3,8,589,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,3,8,590,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,3,8,591,$room); ?></td>
          </tr>
      </table></td>
      <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,1,8,574,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,1,8,575,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,1,8,576,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,2,8,583,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,2,8,584,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,2,8,585,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,3,8,592,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,3,8,593,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,3,8,594,$room); ?></td>
          </tr>
      </table></td>
    </tr>

    <tr>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,4,8,595,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,4,8,596,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,4,8,597,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,5,8,604,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,5,8,605,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,5,8,606,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,6,8,613,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,6,8,614,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,6,8,615,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,4,8,598,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,4,8,599,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,4,8,600,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,5,8,607,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,5,8,608,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,5,8,609,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,6,8,616,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,6,8,617,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,6,8,618,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,4,8,601,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,4,8,602,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,4,8,603,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,5,8,610,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,5,8,611,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,5,8,612,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,6,8,619,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,6,8,620,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,6,8,621,$room); ?></td>
          </tr>
      </table></td>
    </tr>

    <tr>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(1,7,8,622,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,7,8,623,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,7,8,624,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,8,8,631,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,8,8,632,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,8,8,633,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(1,9,8,640,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(2,9,8,641,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(3,9,8,642,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(4,7,8,625,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,7,8,626,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,7,8,627,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,8,8,634,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,8,8,635,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,8,8,636,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(4,9,8,643,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(5,9,8,644,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(6,9,8,645,$room); ?></td>
          </tr>
      </table></td>
      <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
          <tr>
            <td width="49"><?php  sudoku_check_db(7,7,8,628,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,7,8,629,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,7,8,630,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,8,8,637,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,8,8,638,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,8,8,639,$room); ?></td>
          </tr>
          <tr>
            <td width="49"><?php  sudoku_check_db(7,9,8,646,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(8,9,8,647,$room); ?></td>
            <td width="49"><?php  sudoku_check_db(9,9,8,639,$room); ?></td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
<?php  } ?>
<?php 
	if($pages==9){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,9,649,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,9,650,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,9,651,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,9,658,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,9,659,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,9,660,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,9,667,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,9,668,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,9,669,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,9,652,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,9,653,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,9,654,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,9,661,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,9,662,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,9,663,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,9,670,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,9,671,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,9,672,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,9,655,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,9,656,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,9,657,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,9,664,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,9,665,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,9,666,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,9,673,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,9,674,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,9,675,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,9,676,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,9,677,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,9,678,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,9,685,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,9,686,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,9,687,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,9,694,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,9,695,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,9,696,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,9,679,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,9,680,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,9,681,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,9,688,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,9,689,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,9,690,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,9,697,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,9,698,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,9,699,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,9,682,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,9,683,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,9,684,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,9,691,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,9,692,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,9,693,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,9,700,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,9,701,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,9,702,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,9,703,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,9,704,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,9,705,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,9,712,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,9,713,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,9,714,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,9,721,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,9,722,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,9,723,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,9,706,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,9,707,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,9,708,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,9,715,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,9,716,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,9,717,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,9,724,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,9,725,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,9,726,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,9,709,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,9,710,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,9,711,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,9,718,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,9,719,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,9,720,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,9,727,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,9,728,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,9,729,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  
}}else if($core=="yzx"){
	if($pages==1){
?>		
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,1,730,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,1,2,739,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,1,3,748,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,1,731,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,2,2,740,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,2,3,749,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,1,732,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,3,2,741,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,3,3,750,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,4,757,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,1,5,766,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,1,6,775,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,4,758,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,2,5,767,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,2,6,776,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,4,759,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,3,5,768,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,3,6,777,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,7,784,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,1,8,793,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,1,9,802,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,7,785,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,2,8,794,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,2,9,803,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,7,786,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,3,8,795,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,3,9,804,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,1,733,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,4,2,742,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,4,3,751,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,1,734,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,5,2,743,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,5,3,752,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,1,735,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,6,2,744,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,6,3,753,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,4,760,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,4,5,769,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,4,6,778,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,4,761,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,5,5,770,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,5,6,779,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,4,762,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,6,5,771,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,6,6,780,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,7,787,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,4,8,796,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,4,9,805,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,7,788,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,5,8,797,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,5,9,806,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,7,789,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,6,8,798,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,6,9,807,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,1,736,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,7,2,745,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,7,3,754,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,1,737,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,8,2,746,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,8,3,755,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,1,738,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,9,2,747,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,9,3,756,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,4,763,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,7,5,772,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,7,6,781,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,4,764,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,8,5,773,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,8,6,782,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,4,765,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,9,5,774,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,9,6,783,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,7,790,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,7,8,799,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,7,9,808,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,7,791,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,8,8,800,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,8,9,809,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,7,792,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,9,8,801,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(1,9,9,810,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php 
if($pages==2){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(2,1,1,811,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,2,820,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,3,829,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,2,1,812,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,2,821,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,3,830,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,3,1,813,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,2,822,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,3,831,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(2,1,4,838,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,5,847,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,6,856,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,2,4,839,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,5,848,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,6,857,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,3,4,840,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,5,849,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,6,858,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(2,1,7,865,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,8,874,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,9,883,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,2,7,866,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,8,875,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,9,884,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,3,7,867,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,8,876,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,9,885,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(2,4,1,814,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,2,823,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,3,832,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,5,1,815,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,2,824,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,3,833,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,6,1,816,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,2,825,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,3,834,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(2,4,4,841,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,5,850,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,6,859,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,5,4,842,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,5,851,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,6,860,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,6,4,843,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,5,852,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,6,861,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(2,4,7,868,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,8,877,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,9,886,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,5,7,869,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,8,878,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,9,887,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,6,7,870,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,8,879,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,9,888,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(2,7,1,817,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,2,826,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,3,835,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,8,1,818,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,2,827,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,3,836,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,9,1,819,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,2,828,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,3,837,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(2,7,4,844,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,5,853,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,6,862,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,8,4,845,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,5,854,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,6,863,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,9,4,846,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,5,855,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,6,864,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(2,7,7,871,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,8,880,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,9,889,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,8,7,872,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,8,881,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,9,890,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(2,9,7,873,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,8,882,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,9,891,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php 
if($pages==3){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(3,1,1,892,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,2,901,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,3,910,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,2,1,893,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,2,902,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,3,911,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,3,1,894,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,2,903,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,3,912,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(3,1,4,919,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,5,928,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,6,937,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,2,4,920,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,5,929,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,6,938,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,3,4,921,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,5,930,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,6,939,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(3,1,7,946,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,8,955,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,9,964,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,2,7,947,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,8,956,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,9,965,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,3,7,948,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,8,957,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,9,966,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(3,4,1,895,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,2,904,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,3,913,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,5,1,896,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,2,905,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,3,914,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,6,1,897,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,2,906,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,3,915,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(3,4,4,922,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,5,931,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,6,940,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,5,4,923,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,5,932,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,6,941,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,6,4,924,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,5,933,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,6,942,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(3,4,7,949,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,8,958,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,9,967,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,5,7,950,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,8,959,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,9,968,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,6,7,951,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,8,960,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,9,969,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(3,7,1,898,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,2,907,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,3,916,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,8,1,899,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,2,908,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,3,917,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,9,1,900,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,2,909,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,3,918,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(3,7,4,925,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,5,934,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,6,943,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,8,4,926,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,5,935,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,6,944,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,9,4,927,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,5,936,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,6,945,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(3,7,7,952,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,8,961,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,9,970,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,8,7,953,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,8,962,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,9,971,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(3,9,7,954,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,8,963,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,9,972,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php 
if($pages==4){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,1,973,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,1,2,982,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,1,3,991,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,1,974,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,2,2,983,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,2,3,992,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,1,975,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,3,2,984,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,3,3,993,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,4,1000,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,1,5,1009,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,1,6,1018,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,4,1001,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,2,5,1010,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,2,6,1019,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,4,1002,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,3,5,1011,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,3,6,1020,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,7,1027,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,1,8,1036,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,1,9,1045,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,7,1028,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,2,8,1037,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,2,9,1046,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,7,1029,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,3,8,1038,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,3,9,1047,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,1,976,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,4,2,985,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,4,3,994,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,1,977,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,5,2,986,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,5,3,995,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,1,978,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,6,2,987,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,6,3,996,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,4,1003,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,4,5,1012,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,4,6,1021,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,4,1004,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,5,5,1013,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,5,6,1022,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,4,1005,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,6,5,1014,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,6,6,1023,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,7,1030,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,4,8,1039,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,4,9,1048,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,7,1031,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,5,8,1040,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,5,9,1049,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,7,1032,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,6,8,1041,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,6,9,1050,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,1,979,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,7,2,988,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,7,3,997,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,1,980,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,8,2,989,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,8,3,998,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,1,981,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,9,2,990,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,9,3,999,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,4,1006,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,7,5,1015,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,7,6,1024,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,4,1007,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,8,5,1016,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,8,6,1025,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,4,1008,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,9,5,1017,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,9,6,1026,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,7,1033,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,7,8,1042,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,7,9,1051,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,7,1034,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,8,8,1043,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,8,9,1052,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,7,1035,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,9,8,1044,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(4,9,9,1053,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php 
if($pages==5){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(5,1,1,1054,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,2,1063,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,3,1072,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,2,1,1055,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,2,1064,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,3,1073,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,3,1,1056,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,2,1065,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,3,1074,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(5,1,4,1081,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,5,1090,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,6,1099,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,2,4,1082,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,5,1091,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,6,1100,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,3,4,1083,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,5,1092,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,6,1101,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(5,1,7,1108,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,8,1117,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,9,1126,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,2,7,1109,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,8,1118,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,9,1127,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,3,7,1110,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,8,1119,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,9,1128,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(5,4,1,1057,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,2,1066,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,3,1075,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,5,1,1058,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,2,1067,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,3,1076,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,6,1,1059,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,2,1068,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,3,1077,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(5,4,4,1084,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,5,1093,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,6,1102,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,5,4,1085,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,5,1094,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,6,1103,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,6,4,1086,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,5,1095,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,6,1104,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(5,4,7,1111,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,8,1120,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,9,1129,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,5,7,1112,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,8,1121,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,9,1130,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,6,7,1113,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,8,1122,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,9,1131,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(5,7,1,1060,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,2,1069,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,3,1078,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,8,1,1061,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,2,1070,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,3,1079,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,9,1,1062,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,2,1071,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,3,1080,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(5,7,4,1087,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,5,1096,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,6,1105,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,8,4,1088,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,5,1097,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,6,1106,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,9,4,1089,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,5,1098,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,6,1107,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(5,7,7,1114,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,8,1123,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,9,1132,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,8,7,1115,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,8,1124,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,9,1133,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(5,9,7,1116,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,8,1125,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,9,1134,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php 
if($pages==6){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(6,1,1,1135,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,2,1144,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,3,1153,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,2,1,1136,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,2,1145,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,3,1154,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,3,1,1137,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,2,1146,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,3,1155,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(6,1,4,1162,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,5,1171,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,6,1180,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,2,4,1163,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,5,1172,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,6,1181,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,3,4,1164,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,5,1173,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,6,1182,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(6,1,7,1189,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,8,1198,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,9,1207,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,2,7,1190,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,8,1199,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,9,1208,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,3,7,1191,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,8,1200,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,9,1209,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(6,4,1,1138,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,2,1147,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,3,1156,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,5,1,1139,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,2,1148,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,3,1157,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,6,1,1140,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,2,1149,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,3,1158,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(6,4,4,1165,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,5,1174,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,6,1183,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,5,4,1166,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,5,1175,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,6,1184,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,6,4,1167,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,5,1176,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,6,1185,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(6,4,7,1192,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,8,1201,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,9,1210,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,5,7,1193,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,8,1202,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,9,1211,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,6,7,1194,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,8,1203,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,9,1212,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(6,7,1,1141,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,2,1150,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,3,1159,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,8,1,1142,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,2,1151,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,3,1160,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,9,1,1143,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,2,1152,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,3,1161,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(6,7,4,1168,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,5,1177,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,6,1186,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,8,4,1169,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,5,1178,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,6,1187,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,9,4,1170,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,5,1179,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,6,1188,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(6,7,7,1195,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,8,1204,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,9,1213,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,8,7,1196,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,8,1205,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,9,1214,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(6,9,7,1197,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,8,1206,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,9,1215,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php 
if($pages==7){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,1,1216,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,1,2,1225,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,1,3,1234,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,1,1217,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,2,2,1226,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,2,3,1235,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,1,1218,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,3,2,1227,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,3,3,1236,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,4,1243,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,1,5,1252,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,1,6,1261,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,4,1244,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,2,5,1253,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,2,6,1262,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,4,1245,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,3,5,1254,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,3,6,1263,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,7,1270,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,1,8,1279,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,1,9,1288,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,7,1271,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,2,8,1280,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,2,9,1289,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,7,1272,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,3,8,1281,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,3,9,1290,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,1,1219,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,4,2,1228,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,4,3,1237,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,1,1220,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,5,2,1229,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,5,3,1238,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,1,1221,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,6,2,1230,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,6,3,1239,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,4,1246,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,4,5,1255,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,4,6,1264,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,4,1247,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,5,5,1256,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,5,6,1265,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,4,1248,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,6,5,1257,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,6,6,1266,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,7,1273,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,4,8,1282,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,4,9,1291,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,7,1274,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,5,8,1283,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,5,9,1292,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,7,1275,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,6,8,1284,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,6,9,1293,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,1,1222,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,7,2,1231,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,7,3,1240,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,1,1223,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,8,2,1232,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,8,3,1241,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,1,1224,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,9,2,1233,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,9,3,1242,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,4,1249,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,7,5,1258,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,7,6,1267,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,4,1250,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,8,5,1259,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,8,6,1268,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,4,1251,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,9,5,1260,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,9,6,1269,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,7,1276,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,7,8,1285,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,7,9,1294,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,7,1277,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,8,8,1286,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,8,9,1295,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,7,1278,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,9,8,1287,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(7,9,9,1296,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php 
if($pages==8){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(8,1,1,1297,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,2,1306,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,3,1315,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,2,1,1298,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,2,1307,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,3,1316,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,3,1,1299,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,2,1308,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,3,1317,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(8,1,4,1324,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,5,1333,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,6,1342,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,2,4,1325,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,5,1334,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,6,1343,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,3,4,1326,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,5,1335,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,6,1344,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(8,1,7,1351,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,8,1360,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,9,1369,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,2,7,1352,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,8,1361,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,9,1370,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,3,7,1353,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,8,1362,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,9,1371,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(8,4,1,1300,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,2,1309,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,3,1318,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,5,1,1301,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,2,1310,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,3,1319,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,6,1,1302,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,2,1311,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,3,1320,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(8,4,4,1327,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,5,1336,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,6,1345,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,5,4,1328,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,5,1337,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,6,1346,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,6,4,1329,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,5,1338,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,6,1347,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(8,4,7,1354,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,8,1363,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,9,1372,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,5,7,1355,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,8,1364,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,9,1373,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,6,7,1356,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,8,1365,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,9,1374,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(8,7,1,1303,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,2,1312,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,3,1321,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,8,1,1304,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,2,1313,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,3,1322,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,9,1,1305,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,2,1314,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,3,1323,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(8,7,4,1330,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,5,1339,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,6,1348,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,8,4,1331,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,5,1340,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,6,1349,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,9,4,1332,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,5,1341,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,6,1350,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(8,7,7,1357,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,8,1366,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,9,1375,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,8,7,1358,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,8,1367,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,9,1376,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(8,9,7,1359,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,8,1368,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,9,1377,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php 
if($pages==9){
?>
<p>แผ่น 18</p>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(9,1,1,1378,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,2,1387,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,3,1396,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,2,1,1379,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,2,1388,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,3,1397,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,3,1,1380,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,2,1389,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,3,1398,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(9,1,4,1405,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,5,1414,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,6,1423,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,2,4,1406,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,5,1415,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,6,1424,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,3,4,1407,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,5,1416,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,6,1425,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(9,1,7,1432,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,8,1441,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,9,1450,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,2,7,1433,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,8,1442,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,9,1451,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,3,7,1434,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,8,1443,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,9,1452,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(9,4,1,1381,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,2,1390,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,3,1399,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,5,1,1382,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,2,1391,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,3,1400,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,6,1,1383,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,2,1392,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,3,1401,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(9,4,4,1408,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,5,1417,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,6,1426,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,5,4,1409,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,5,1418,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,6,1427,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,6,4,1410,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,5,1419,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,6,1428,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(9,4,7,1435,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,8,1444,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,9,1453,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,5,7,1436,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,8,1445,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,9,1454,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,6,7,1437,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,8,1446,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,9,1455,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(9,7,1,1384,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,2,1393,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,3,1402,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,8,1,1385,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,2,1394,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,3,1403,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,9,1,1386,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,2,1395,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,3,1404,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(9,7,4,1411,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,5,1420,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,6,1429,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,8,4,1412,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,5,1421,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,6,1430,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,9,4,1413,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,5,1422,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,6,1431,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(9,7,7,1438,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,8,1447,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,9,1456,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,8,7,1439,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,8,1448,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,9,1457,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(9,9,7,1440,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,8,1449,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,9,1458,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php 
}}else if($core=="zxy"){
		if($pages==1){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,9,1467,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,9,1476,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,9,1485,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,8,1466,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,8,1475,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,8,1484,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,7,1465,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,7,1474,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,7,1483,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,9,1494,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,9,1503,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,9,1512,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,8,1493,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,8,1502,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,8,1511,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,7,1492,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,7,1501,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,7,1510,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,9,1521,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,9,1530,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,9,1539,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,8,1520,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,8,1529,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,8,1538,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,7,1519,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,7,1528,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,7,1537,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,6,1464,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,6,1473,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,6,1482,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,5,1463,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,5,1472,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,5,1481,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,4,1462,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,4,1471,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,4,1480,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,6,1491,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,6,1500,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,6,1509,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,5,1490,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,5,1499,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,5,1508,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,4,1489,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,4,1498,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,4,1507,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,6,1518,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,6,1527,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,6,1536,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,5,1517,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,5,1526,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,5,1535,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,4,1516,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,4,1525,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,4,1534,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,3,1461,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,3,1470,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,3,1479,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,2,1460,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,2,1469,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,2,1478,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,1,1,1459,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,1,1,1468,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,1,1,1477,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,3,1488,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,3,1497,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,3,1506,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,2,1487,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,2,1496,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,2,1505,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,1,1,1486,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,1,1,1495,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,1,1,1504,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,3,1515,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,3,1524,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,3,1533,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,2,1514,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,2,1523,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,2,1532,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,1,1,1513,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,1,1,1522,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,1,1,1531,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php  
if($pages==2){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,9,1548,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,9,1557,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,9,1566,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,8,1547,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,8,1556,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,8,1565,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,7,1546,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,7,1555,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,7,1564,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,9,1575,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,9,1584,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,9,1593,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,8,1574,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,8,1583,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,8,1592,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,7,1573,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,7,1582,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,7,1591,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,9,1602,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,9,1611,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,9,1620,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,8,1601,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,8,1610,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,8,1619,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,7,1600,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,7,1609,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,7,1618,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,6,1545,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,6,1554,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,6,1563,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,5,1544,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,5,1553,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,5,1562,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,4,1543,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,4,1542,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,4,1561,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,6,1572,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,6,1581,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,6,1590,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,5,1571,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,5,1580,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,5,1589,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,4,1570,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,4,1579,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,4,1588,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,6,1599,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,6,1608,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,6,1617,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,5,1598,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,5,1607,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,5,1616,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,4,1597,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,4,1606,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,4,1615,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,3,1542,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,3,1551,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,3,1560,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,2,1541,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,2,1550,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,2,1559,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,2,1,1540,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,2,1,1549,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,2,1,1558,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,3,1569,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,3,1578,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,3,1587,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,2,1568,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,2,1577,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,2,1586,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,2,1,1567,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,2,1,1576,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,2,1,1585,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,3,1596,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,3,1605,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,3,1614,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,2,1595,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,2,1604,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,2,1613,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,2,1,1594,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,2,1,1603,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,2,1,1612,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php  
if($pages==3){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,9,1629,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,9,1638,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,9,1647,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,8,1628,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,8,1637,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,8,1646,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,7,1627,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,7,1636,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,7,1645,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,9,1656,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,9,1665,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,9,1674,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,8,1655,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,8,1664,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,8,1673,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,7,1654,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,7,1663,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,7,1672,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,9,1683,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,9,1692,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,9,1701,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,8,1682,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,8,1691,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,8,1700,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,7,1681,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,7,1690,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,7,1699,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,6,1626,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,6,1635,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,6,1644,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,5,1625,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,5,1634,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,5,1643,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,4,1624,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,4,1633,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,4,1642,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,6,1653,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,6,1662,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,6,1671,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,5,1652,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,5,1661,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,5,1670,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,4,1651,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,4,1660,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,4,1669,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,6,1680,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,6,1689,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,6,1698,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,5,1679,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,5,1688,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,5,1697,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,4,1678,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,4,1687,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,4,1696,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,3,1623,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,3,1632,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,3,1641,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,2,1622,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,2,1631,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,2,1640,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,3,1,1621,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,3,1,1630,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,3,1,1639,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,3,1650,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,3,1659,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,3,1668,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,2,1649,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,2,1658,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,2,1667,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,3,1,1648,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,3,1,1657,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,3,1,1666,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,3,1677,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,3,1686,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,3,1695,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,2,1676,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,2,1685,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,2,1694,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,3,1,1675,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,3,1,1684,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,3,1,1693,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php  
if($pages==4){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,9,1710,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,9,1719,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,9,1728,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,8,1709,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,8,1718,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,8,1727,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,7,1708,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,7,1717,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,7,1726,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,9,1737,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,9,1746,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,9,1755,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,8,1736,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,8,1745,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,8,1754,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,7,1735,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,7,1744,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,7,1753,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,9,1764,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,9,1773,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,9,1782,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,8,1763,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,8,1772,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,8,1781,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,7,1762,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,7,1771,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,7,1780,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,6,1707,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,6,1716,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,6,1725,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,5,1706,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,5,1715,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,5,1724,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,4,1705,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,4,1714,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,4,1723,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,6,1734,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,6,1743,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,6,1752,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,5,1733,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,5,1742,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,5,1751,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,4,1732,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,4,1741,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,4,1750,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,6,1761,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,6,1770,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,6,1779,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,5,1760,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,5,1769,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,5,1778,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,4,1759,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,4,1768,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,4,1777,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,3,1704,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,3,1713,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,3,1722,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,2,1703,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,2,1712,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,2,1721,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,4,1,1702,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,4,1,1711,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,4,1,1720,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,3,1731,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,3,1740,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,3,1749,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,2,1730,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,2,1739,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,2,1748,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,4,1,1729,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,4,1,1738,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,4,1,1747,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,3,1758,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,3,1767,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,3,1776,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,2,1757,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,2,1766,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,2,1775,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,4,1,1756,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,4,1,1765,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,4,1,1774,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php  
if($pages==5){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,9,1791,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,9,1800,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,9,1809,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,8,1790,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,8,1799,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,8,1808,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,7,1789,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,7,1798,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,7,1807,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,9,1818,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,9,1827,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,9,1836,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,8,1817,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,8,1826,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,8,1835,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,7,1816,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,7,1825,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,7,1834,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,9,1845,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,9,1854,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,9,1863,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,8,1844,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,8,1853,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,8,1862,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,7,1843,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,7,1852,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,7,1861,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,6,1788,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,6,1797,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,6,1806,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,5,1787,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,5,1796,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,5,1805,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,4,1786,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,4,1795,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,4,1804,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,6,1815,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,6,1824,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,6,1833,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,5,1814,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,5,1823,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,5,1832,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,4,1813,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,4,1822,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,4,1831,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,6,1842,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,6,1851,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,6,1860,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,5,1841,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,5,1850,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,5,1859,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,4,1840,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,4,1849,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,4,1858,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,3,1785,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,3,1794,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,3,1803,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,2,1784,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,2,1793,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,2,1802,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,5,1,1783,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,5,1,1792,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,5,1,1801,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,3,1812,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,3,1821,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,3,1830,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,2,1811,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,2,1820,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,2,1829,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,5,1,1810,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,5,1,1819,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,5,1,1828,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,3,1839,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,3,1848,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,3,1857,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,2,1838,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,2,1847,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,2,1856,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,5,1,1837,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,5,1,1846,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,5,1,1855,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php  
if($pages==6){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,9,1872,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,9,1881,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,9,1890,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,8,1871,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,8,1880,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,8,1889,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,7,1870,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,7,1879,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,7,1888,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,9,1899,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,9,1908,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,9,1917,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,8,1898,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,8,1907,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,8,1916,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,7,1897,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,7,1906,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,7,1915,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,9,1926,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,9,1935,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,9,1944,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,8,1925,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,8,1934,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,8,1943,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,7,1924,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,7,1933,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,7,1942,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,6,1869,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,6,1878,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,6,1887,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,5,1868,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,5,1877,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,5,1886,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,4,1867,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,4,1876,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,4,1885,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,6,1896,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,6,1905,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,6,1914,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,5,1895,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,5,1904,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,5,1913,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,4,1894,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,4,1903,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,4,1912,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,6,1923,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,6,1932,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,6,1941,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,5,1922,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,5,1931,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,5,1940,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,4,1921,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,4,1930,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,4,1939,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,3,1866,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,3,1875,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,3,1884,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,2,1865,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,2,1874,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,2,1883,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,6,1,1864,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,6,1,1873,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,6,1,1882,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,3,1893,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,3,1902,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,3,1911,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,2,1892,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,2,1901,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,2,1910,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,6,1,1891,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,6,1,1900,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,6,1,1909,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,3,1920,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,3,1929,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,3,1938,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,2,1919,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,2,1928,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,2,1937,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,6,1,1918,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,6,1,1927,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,6,1,1936,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php  
if($pages==7){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,9,1953,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,9,1962,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,9,1971,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,8,1952,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,8,1961,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,8,1970,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,7,1951,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,7,1960,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,7,1969,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,9,1980,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,9,1989,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,9,1998,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,8,1979,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,8,1988,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,8,1997,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,7,1978,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,7,1987,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,7,1996,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,9,2007,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,9,2016,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,9,2025,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,8,2006,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,8,2015,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,8,2024,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,7,2005,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,7,2014,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,7,2023,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,6,1950,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,6,1959,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,6,1968,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,5,1949,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,5,1958,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,5,1967,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,4,1948,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,4,1957,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,4,1966,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,6,1977,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,6,1986,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,6,1995,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,5,1976,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,5,1985,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,5,1994,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,4,1975,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,4,1984,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,4,1993,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,6,2004,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,6,2013,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,6,2022,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,5,2003,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,5,2012,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,5,2021,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,4,2002,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,4,2011,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,4,2020,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,3,1947,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,3,1956,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,3,1965,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,2,1946,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,2,1955,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,2,1964,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,7,1,1945,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,7,1,1954,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,7,1,1963,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,3,1974,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,3,1983,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,3,1992,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,2,1973,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,2,1982,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,2,1991,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,7,1,1972,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,7,1,1981,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,7,1,1990,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,3,2001,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,3,2010,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,3,2019,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,2,2000,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,2,2009,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,2,2018,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,7,1,1999,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,7,1,2008,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,7,1,2017,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php  
if($pages==8){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,9,2034,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,9,2043,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,9,2052,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,8,2033,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,8,2042,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,8,2051,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,7,2032,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,7,2041,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,7,2050,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,9,2061,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,9,2070,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,9,2079,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,8,2060,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,8,2069,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,8,2078,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,7,2059,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,7,2068,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,7,2077,$room); ?></td>
      </tr>
    </table></td>
    <td width="251" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,9,2088,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,9,2097,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,9,2106,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,8,2087,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,8,2096,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,8,2105,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,7,2086,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,7,2095,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,7,2104,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,6,2031,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,6,2040,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,6,2049,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,5,2030,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,5,2039,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,5,2048,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,4,2029,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,4,2038,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,4,2047,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,6,2058,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,6,2067,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,6,2076,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,5,2057,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,5,2066,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,5,2075,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,4,2056,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,4,2065,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,4,2074,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,6,2085,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,6,2094,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,6,2103,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,5,2084,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,5,2093,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,5,2102,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,4,2083,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,4,2092,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,4,2101,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,3,2028,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,3,2037,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,3,2046,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,2,2027,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,2,2036,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,2,2045,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,8,1,2026,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,8,1,2035,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,8,1,2044,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,3,2055,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,3,2064,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,3,2073,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,2,2054,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,2,2063,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,2,2072,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,8,1,2053,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,8,1,2062,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,8,1,2071,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,3,2082,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,3,2091,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,3,2100,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,2,2081,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,2,2090,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,2,2099,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,8,1,2080,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,8,1,2089,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,8,1,2098,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
<?php  }  ?>
<?php 
if($pages==9){
?>
<div id="stylized1" class="myform1">
<table width="300" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100" height="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,9,2115,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,9,2124,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,9,2133,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,8,2114,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,8,2123,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,8,2132,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,7,2113,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,7,2122,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,7,2131,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,9,2142,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,9,2151,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,9,2160,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,8,2141,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,8,2150,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,8,2159,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,7,2140,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,7,2149,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,7,2158,$room); ?></td>
      </tr>
    </table></td>
    <td width="100" align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,9,2169,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,9,2178,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,9,2187,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,8,2168,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,8,2177,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,8,2186,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,7,2167,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,7,2176,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,7,2185,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,6,2112,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,6,2121,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,6,2130,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,5,2111,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,5,2120,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,5,2129,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,4,2110,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,4,2119,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,4,2128,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,6,2139,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,6,2148,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,6,2157,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,5,2138,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,5,2147,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,5,2156,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,4,2137,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,4,2146,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,4,2155,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,6,2166,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,6,2175,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,6,2184,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,5,2165,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,5,2174,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,5,2183,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,4,2164,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,4,2173,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,4,2182,$room); ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,3,2109,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,3,2118,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,3,2127,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,2,2108,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,2,2117,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,2,2126,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(1,9,1,2107,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(2,9,1,2116,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(3,9,1,2125,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,3,2136,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,3,2145,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,3,2154,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,2,2135,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,2,2144,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,2,2153,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(4,9,1,2134,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(5,9,1,2143,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(6,9,1,2152,$room); ?></td>
      </tr>
    </table></td>
    <td align="center"><table width="147" border="0" cellpadding="0" cellspacing="0" class="ggg">
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,3,2163,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,3,2172,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,3,2181,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,2,2162,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,2,2171,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,2,2180,$room); ?></td>
      </tr>
      <tr>
        <td width="49"><?php  sudoku_check_db(7,9,1,2161,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(8,9,1,2170,$room); ?></td>
        <td width="49"><?php  sudoku_check_db(9,9,1,2179,$room); ?></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>	
<?php 
}}
}}
?>
<p>
  <?php 
function sudoku_check_db($x,$y,$z,$num,$room){
		require('include/connect.php');
		$sql = "SELECT * FROM tb_sudoku where room='$room' and x='$x' and y='$y' and z='$z' and othor='T'";
		$result = mysql_query($sql);
		$num_row = mysql_num_rows($result);
		if($num_row != 0){
			while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
				{
					$pic_val = $rec["value"];
					echo "<img src=images/number/random/$pic_val.png>";
				}
		}else{
							require('include/connect.php');
							$sql = "SELECT * FROM tb_sudoku where room='$room' and x='$x' and y='$y' and z='$z' and othor='F' and user_up='T'";
							$result = mysql_query($sql);
							$num_row = mysql_num_rows($result);
							if($num_row != 0){
								while ($rec = mysql_fetch_array($result,MYSQL_ASSOC))
									{
										$pic_val = $rec["value"];
										echo "<img src=images/number/user_up/$pic_val.png>";
									}
							}else{
										echo "<input name='x' type='hidden' id='x$num' value='$x'>";
   	 									echo "<input name='y' type='hidden' id='y$num' value='$y'>";
   	 									echo "<input name='z' type='hidden' id='z$num' value='$z'>";
   	  									echo "<input type='text' name='value' id='value$num' onKeyUp='JavaScript:check_value($num);'>";
							}					
		}
}

?>
</p>
</body>
</html>
