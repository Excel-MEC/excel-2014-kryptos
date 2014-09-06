<?php
require 'config.php';
session_start();

ini_set('session.cookie_lifetime',  0);


//session setting needs to be done


$myusername=$_SESSION['username'];
$sql1="SELECT * FROM improve WHERE username='$myusername'";
$result1=mysql_query($sql1);
$count1=mysql_num_rows($result1);

date_default_timezone_set('Asia/Calcutta');
$dest = mktime(00,00,00,9,25,2013); 
$date = new DateTime();
$dif=$dest-TIME();

if(!isset($_SESSION['usrno']))
{
 session_destroy();
 header('Location: hunt.php');
}
else if($dif<=0&&$count1==0)
{
header('Location: krypfeedback.php');
}
else 
{
$USERNAME=$_SESSION['username'];
$sql1="SELECT * FROM $usertable WHERE username='$USERNAME'";
$result1=mysql_query($sql1);
$count=mysql_fetch_assoc($result1);
$level=$count['levelid'];
$_SESSION['level']=$level;

$sql1="SELECT * FROM $kryptostable WHERE id ='$level'";
$result1=mysql_query($sql1);
$count1=mysql_fetch_assoc($result1);
$_SESSION['lev']=$count1['url'];
$loc=$_SESSION['lev'];
header("Location: $loc");
}
?>
