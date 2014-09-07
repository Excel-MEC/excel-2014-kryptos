<?php
session_start();
require 'config.php';
	ini_set('session.cookie_lifetime',  0);
  $fbid=$_POST['fbid'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
    $sql1="SELECT * FROM $usertable WHERE fbid='$fbid'";
    $result1=mysql_query($sql1);
    $count1=mysql_num_rows($result1);
    if($count1<1) 
    {
    	
    	$ran1=rand(0,1);	
 		  $sql="INSERT INTO $usertable (firstname,lastname,fbid, levelid, ran1)".
	    " VALUES ('$firstname','$lastname','$fbid','0','$ran1')";
	      
 		  $result=mysql_query($sql) or die('error inserting value into usertable'); 
 		
      $sql="INSERT INTO $attacktable (username)".
	    " VALUES ('$fbid')";
      $result=mysql_query($sql) or die('error inserting value into attacktable'); 
    
    }
//nigger=0 safe
$sql1="SELECT * FROM $usertable WHERE fbid='$fbid' and nigger='1'";
$result1=mysql_query($sql1) or die("querrying nigger");
$count=mysql_num_rows($result1);
if($count==1)
  { header('Location: detention.php');
    die("contact us");   
  }
$_SESSION['username'] = $fbid;
$_SESSION['usrno'] =$fbid;

$code_filename="answers/fblog.txt";
$codefileopen=fopen($code_filename,"a") or die("can't open log file");
$code=$fbid."\n";
fwrite($codefileopen, $code);
fclose($codefileopen);
echo 1;
?>