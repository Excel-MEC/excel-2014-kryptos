<?php
session_start();
require 'config.php';

	ini_set('session.cookie_lifetime',  0);
  $user=$_POST['username'];
  $password=$_POST['password'];
  $sql0="SELECT * FROM $logintable WHERE username='$user' AND password = '$password'";
	  $result0=mysql_query($sql0) or die(mysql_error());
    $ansstring=mysql_fetch_array($result0);
    $myusername=$ansstring['username'];

    $sql1="SELECT * FROM $usertable WHERE username='$myusername'";
    $result1=mysql_query($sql1);
    $count1=mysql_num_rows($result1);
    if($count1<1) 
    {
    	
    	$ran1=rand(1, 7);
    	$ran2=rand(1, 7);
    	if($ran1==$ran2) {$ran2=rand(1, 7);}	
 		  $sql="INSERT INTO $usertable (username, levelid, ran1, ran2)".
	    " VALUES ('$myusername','0','$ran1','$ran2')";
	      
 		  $result=mysql_query($sql) or die('error inserting value into usertable'); 
 		
      $sql="INSERT INTO $attacktable (username)".
	    " VALUES ('$myusername')";
      $result=mysql_query($sql) or die('error inserting value into attacktable'); 
    
    }

$sql1="SELECT * FROM $usertable WHERE username='$myusername' and nigger='1'";
$result1=mysql_query($sql1) or die("querrying nigger");
$count=mysql_num_rows($result1);
if($count==1)
  { header('Location: detention.php');
    die("contact us");   
  }

$_SESSION['username'] = $myusername;
$_SESSION['usrno'] = $myusername;


chmod("answers", 0755);

$code_filename="answers/fblog.txt";
$codefileopen=fopen($code_filename,"a") or die("can't open log file");
$code=$user_id."\n";
fwrite($codefileopen, $code);
fclose($codefileopen);
chmod("answers", 0700);

header('Location: validate.php');
 

?>