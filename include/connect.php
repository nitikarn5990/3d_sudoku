<?php 
	


	$hostname_conn = "localhost";
    $username_conn = "root";
    $password_conn = "";
    $database_conn = "sudoku";
    mysql_connect($hostname_conn, $username_conn, $password_conn);
    mysql_query("SET NAMES utf8");
    mysql_select_db($database_conn); 
?>