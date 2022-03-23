<?php
	// $connect=mysql_connect('localhost','root','');
	// $db_selected=mysql_select_db("practical");

    // $db=new mysqli("sql204.byethost22.com", "b22_18826257", "formatrix", "b22_18826257_post_site");
$db=new mysqli("127.0.0.1", "root", "", "pragyaa");
	if (!$db) {
	die('Cant connect to server'.mysql_error());
	}
?>