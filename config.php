<?php

	ini_set('session.bug_compat_42',0);
	ini_set('session.bug_compat_warn',0);
	$host="173.194.109.58";
	

    $db_username="root";
	$db_password="ceec2fa2804984cf9e0ce3dbdb2a8d42"; 
	$db_name="kryptos"; 


		
	$connection=mysql_connect("$host", "$db_username","$db_password")or die(mysql_error()); 
   $db=mysql_select_db("$db_name",$connection)or die(mysql_error());
	
	$admin1="sanjaythms";
    $admin2="rahulroymattam";
	
	$kryptostable="kryptostable2";
	$usertable="usertable";
	$attacktable="attacktable";
	$usertable2="usertable2";
	$logintable="logintable";
        $maxrate=30;
	
	
?>