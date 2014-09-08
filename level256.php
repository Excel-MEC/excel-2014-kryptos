<?php
	session_start();
	ini_set('session.cookie_lifetime',  0);
require "config.php";
	if(isset($_SESSION['usrno']) && $_SESSION['lev']!='level256.php')
	{
		$_SESSION['level']+=1;
		$t=time();
		$l=$_SESSION['level'];
  		$sql="UPDATE $usertable set levelid= $l, time= $t where username like \"".$_SESSION['username']."\""; 
  		$recset=mysql_query($sql) or die("There is some technical error4");
		
	}
	
	header('Location:validate.php');

	?> 
