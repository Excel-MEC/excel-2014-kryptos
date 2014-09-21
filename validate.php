<?php
session_start();
require 'config.php';

ini_set('session.cookie_lifetime',  0);


//session setting needs to be done


date_default_timezone_set('Asia/Calcutta');
$dest = mktime(00,00,00,9,25,2013); 
$date = new DateTime();
$dif=$dest-TIME();

if(!isset($_SESSION['usrno']))
{
 session_destroy();
 header('Location: start.php');
}
else 
{
$fbid=$_SESSION['username'];
$sql1="SELECT * FROM $usertable WHERE fbid='$fbid'";
$result1=mysql_query($sql1);
$count=mysql_fetch_assoc($result1);
$i=$count['ran1'];
$level=$count['levelid'];
$_SESSION['level']=$level.(($level==8)?(chr(ord('a')+$i%2)):'');
if($_SESSION['level']==68)
{
	$_SESSION['level68']=$i;
}
$sql1="SELECT * FROM $kryptostable WHERE id =$level";
$result1=mysql_query($sql1);
$count1=mysql_fetch_assoc($result1);
$_SESSION['lev']=$count1['url'];
$loc=$_SESSION['lev'];
header("Location: $loc");
}
?>
