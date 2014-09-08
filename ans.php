<?php
//die("<script>window.location='index.php'</script>");
session_start();

ini_set('session.cookie_lifetime',  0);
require "config.php";

$sql1="SELECT * FROM $usertable WHERE fbid='".$_SESSION['usrno']."' and nigger='1'";
$result1=mysql_query($sql1) or die("querrying nigger");
$count=mysql_num_rows($result1);
if($count==1)
    { 
          header('Location:detention.php'); 
          die("contact us");
     }


function updatetable($nexlev,$table,$user)
{
   
  $sql2="SELECT * FROM $table WHERE fbid='$user'";
  $result2=mysql_query($sql2);
  $count=mysql_fetch_assoc($result2); 
  $i=$count['ran1'];
  $_SESSION['level']=$nexlev.(($nexlev==8)?(chr(ord('a')+$i%2)):'');
  //$sql="UPDATE kryptos_user set level=\"".$nexlev."\",time=NOW() where id like \"".$_SESSION['usrno']."\"";
  $t = time();
  $sql="UPDATE $table set levelid= '$nexlev', time= '$t' where fbid like \"".$_SESSION['username']."\""; 
  $recset=mysql_query($sql) or die("There is some technical error4");
        
 
/*
  if($nexlev>31 && $nexlev<=41)
       { $nextlevel=$nexlev-1;}
  else if($nexlev>=42)
      { $nextlevel=$nexlev-2;}
  else 
      $nextlevel=$nexlev;
 */
//   $img=rand()%2;
//   $user_id = $_SESSION['username'];
   $a=array("resp"=>"39a04db82a0cf3aee49a13304e987f37");
   echo json_encode($a);
   //header('Location: validate.php');
  
}
$user_id = $_SESSION['username'];
if($user_id) 
{

// if($_SESSION['lev']!='initiation')
// {
// date_default_timezone_set('Asia/Calcutta');
// $unixtime = date("d-m-Y H:i:s",mktime());
// $code_filename="answers/".$_SESSION['username']."X.txt";
// $codefileopen=fopen($code_filename,"a") or die("can't open log file");
// $code=$unixtime."->".$_POST['answer']."-->".$_SESSION['lev']."\n";
// fwrite($codefileopen, $code);
// fclose($codefileopen);
// }

$sql="SELECT * from $usertable where fbid = '".$_SESSION['username']."' ";
$recset=mysql_query($sql) or die("There is some technical error1");
$row=mysql_fetch_assoc($recset);
$curlev=$row['levelid'];

$nexlev=$curlev+1;

/*if($curlev==7)
{
  $x=$row['ran1'];
  $nexlev=($x==0) ? 81 :82;
}*/
$user=$row['fbid'];
if($_SESSION['lev']=='initiation')
{
  $_SESSION['level']=1;
  $nexlev=1;
  $sql2="SELECT * FROM $usertable WHERE fbid='$user'";
  $result2=mysql_query($sql2);
  $count=mysql_fetch_assoc($result2); 
  $t = time();
  $sql="UPDATE $usertable set levelid= '$nexlev', time= '$t' where fbid like \"".$_SESSION['username']."\""; 
  $recset=mysql_query($sql) or die("There is some technical error4");
  header('Location: validate.php');
} 

  if($_POST['answer']=="")
$ch_ans=md5(preg_replace('/\s+|[^a-zA-Z1234567890запускдвигтеля]/', '', strtolower("BlUhbLuHhUgEwItCh")));
else
$ch_ans=md5(preg_replace('/\s+|[^a-zA-Z1234567890запускдвигтеля]/', '', mb_convert_case($_POST['answer']."0x9", MB_CASE_LOWER, "UTF-8")));

/* SQl injection removal deploying basic counter measure..... */

$ch_ans=stripslashes($ch_ans);
$ch_ans= mysql_real_escape_string($ch_ans,$connection);

if($_SESSION['lev']=='initiation')
{
$ch_ans=md5('');
}
//$ch_ans=$_POST['answer']; remove comment  wen encryption not given

$brute="select * from  $attacktable where username='".$user."'";
$attackresult=mysql_query($brute) or die("There is some technical error2");
$attackrow = mysql_fetch_assoc($attackresult);
$attackval = $attackrow["lev".$curlev]-1;

/*  rate analyzer */ 

date_default_timezone_set('Asia/Calcutta');
if(!isset($_SESSION['attempt']) || !isset($_SESSION['strtime']))
{
  $_SESSION['attempt']=0;
  $_SESSION['strtime']=TIME();
}
$_SESSION['attempt']=$_SESSION['attempt']+1;
$_SESSION['endtime']=TIME();
$timediff=$_SESSION['endtime']-$_SESSION['strtime'];
if($timediff>=60 || $_SESSION['attempt']>=$maxrate)
{
   if($_SESSION['attempt']>=$maxrate)
     {
      // $code_filename="answers/assholesX.txt";
      // $codefileopen=fopen($code_filename,"a") or die("can't open flog file");
      // $code=$unixtime."->".$_SESSION['username']."->".$_SESSION['attempt']."\n";
      // fwrite($codefileopen, $code);
      // fclose($codefileopen);
      $s="update $usertable set nigger='1' where fbid='".$user."'";
      mysql_query($s) or die("There is some technical ferror3");
      die("contact us");
     }
  else
  {
  $_SESSION['strtime']=TIME();
  $_SESSION['attempt']=0;
  }
}



/* rate analyzer till here */

if($curlev<60)
{
$brute="UPDATE $attacktable set lev".$curlev."='".$attackval."' where username='".$user."'";
mysql_query($brute) or die("There is some technical error3".$curlev);
}


switch($curlev)
      {//2 5 19 30 31 33 39 49 50  53 54 55 56 57 58 59 60 61 62 all others in db
        /*        case 2:;break;
                                case 53:;break;
                                case 54:$ans=md5("abbottabad");break;
                                case 55:$ans=md5("gadsby");break;
                                case 56:$ans=md5("kryptos");break;
                                case 57:if($_COOKIE["Package"]=="myip")
                                         $ans=$ch_ans;
                                         break;
                                case 58:$ans=md5("kurama");break;
                                case 59:$ans=md5("soyouthinkyoucandance");break;
                                case 60:$ans=md5("avicii");break;
                                case 61:$ans=md5("turingaward");break;
                                case 62:$ans=md5("aaronhillelswartz");break;
                                case 39:$ans=$_SESSION['facebook'];break;
                                case 5:$ans=md5("vijaydiwas");break;
        case 19:;break;
                                case 33:$sql="SELECT * from $usertable where nigger <> '1'order by levelid desc,time asc";
                                        //echo $sql;
                                        $recset=mysql_query($sql) or die("There is some technical error");
                                        $prvs="name";
                                        while(($row = mysql_fetch_array( $recset ))) 
                                    {                                     
                                               if($row['username']==$_SESSION['usrno'])
                                                   {
                                                     break;
                                                   }
                                                   $prvs= $row['username'];
                                                      
                                           }
                                         if($prvs=="name")
                                            $prvs="username";
                                         $ans=md5($prvs);
                                         break;
                                case 49:$ans=md5("michaelfarmstrong");break;
                                case 50:$ans=md5("renjithkumar");break;
        case 30: $answer_30=array("avarice","envy","wrath","sloth","gluttony","lust","pride");
              $sql1="SELECT * FROM $usertable WHERE username='$user'";
              $result1=mysql_query($sql1);
              $count=mysql_fetch_assoc($result1); 
              $i=$count['ran1'];
              $ans=$answer_30[$i-1];
              $ans=trim($ans);
              $ans=md5($ans);
              break;
        case 31: $answer_thirty=array("pabloruizypicasso","ernestrutherford","aristotle","carlosraychucknorris","marktwain","alexandredumas","voltaire");
              $sql1="SELECT * FROM $usertable WHERE username='$user'";
              $result1=mysql_query($sql1);
              $count=mysql_fetch_assoc($result1); 
              $i=$count['ran2'];
              $ans=$answer_thirty[$i-1];
              $ans=trim($ans);
              $ans=md5($ans);
              break;*/
        case 0:break;
        case 13:break;
        case 8:
              $answer_30=array("dc02555286ce9bdfab3e96d5b6a77663","059b0015e18e3a15535898f209b29186");
              $sql1="SELECT * FROM $usertable WHERE fbid='$user'";
              $result1=mysql_query($sql1);
              $count=mysql_fetch_assoc($result1); 
              $i=$count['ran1'];
              $ans=$answer_30[$i];
              break;
        default : $sql="SELECT * from $kryptostable where id ='$curlev'";
                    $recset=mysql_query($sql) or die("There is some technical error!!");
              $row=mysql_fetch_assoc($recset);
              $ans=$row['answer'];
              break;
      }




if($_SESSION['lev']=='initiation'&&$nexlev==1)
{  
  updatetable($nexlev,$usertable,$user);
  header('Location: validate.php');
}

else if($curlev==90 && $ch_ans==$ans)
  {   
    header('Location:index.php');
    //echo"index.php";
  }
else if($ch_ans == $ans)
  {
    updatetable($nexlev,$usertable,$user);
  }
else
  {
    $a=array("resp"=>"563b9ab8b16c5c96be563348975b9783");
   echo json_encode($a);
  }

}// end of if($user_id)
else { header('Location: start.php'); 
}
  ?>