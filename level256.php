<?php
	session_start();
	ini_set('session.cookie_lifetime',  0);
require "config.php";
	if(isset($_SESSION['usrno']) && $_SESSION['lev']!='level13.php')
	{
		$_SESSION['level']=14;
		$t=time();
		$l=$_SESSION['level'];
  		$sql="UPDATE $usertable set levelid= $l, time= $t where fbid like \"".$_SESSION['username']."\""; 
  		$recset=mysql_query($sql) or die("There is some technical error4");
echo $l."<br>".$t."</br>".$_SESSION['level'];
	}
	
	header('Location:validate.php');

	?> 
