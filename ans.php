<?php
//die("<script>window.location='index.php'</script>");
session_start();

ini_set('session.cookie_lifetime',  0);
require "config.php";

$sql1="SELECT * FROM $usertable WHERE fbid='".$_SESSION['usrno']."' and nigger=1";
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
  // $i=$count['ran1'];
  // if($nexlev==8)
  // {
  // if($i==1)
  //   $_SESSION['level']=$nexlev.'a';
  // else
  // $_SESSION['level']=$nexlev.'b';  
  // }
  $i=$count['ran1'];
  $_SESSION['level']=$nexlev.(($nexlev==8)?(chr(ord('a')+$i%2)):'');
  //$sql="UPDATE kryptos_user set level=\"".$nexlev."\",time=NOW() where id like \"".$_SESSION['usrno']."\"";
  if($_SESSION['level']==68)
  {
  $t = time();
  $sql="UPDATE $table set levelid= $nexlev, time= $t,ran1=0 where fbid like \"".$_SESSION['username']."\""; 
  $recset=mysql_query($sql) or die("There is some technical error4");
  }
  else if($_SESSION['level']==69&& $i==0)
  {
  $t = time();
  $sql="UPDATE $table set levelid=68, time= $t,ran1=1 where fbid like \"".$_SESSION['username']."\""; 
  $recset=mysql_query($sql) or die("There is some technical error4"); 
  }
  else
  {
  $t = time();
  $sql="UPDATE $table set levelid= $nexlev, time= $t where fbid like \"".$_SESSION['username']."\""; 
  $recset=mysql_query($sql) or die("There is some technical error4");
  }     
 
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


$sql="SELECT * from $usertable where fbid = '".$_SESSION['username']."'";
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


if($curlev==59 && $_SESSION['lev']=="level60.php")
{
  // for Popuscu
date_default_timezone_set('UTC');
//date_default_timezone_set('Asia/Calcutta');
$sql1="SELECT * from $answerlog where fbid = '".$_SESSION['username']."'";
$result1=mysql_query($sql1);
$count1=mysql_num_rows($result1);
$fbid=$_SESSION['username'];

  $unixtime = date("d-m-Y H:i:s",mktime());
  $forans="cleared\(level 59\)";
  $log=$unixtime."->".$forans."-->".$_SESSION['lev']." @@@";
  $sql="UPDATE $answerlog SET log=CONCAT(log,'$log') WHERE fbid='$fbid'";
  mysql_query($sql) or die("There is some technical error71");

  $sql2="SELECT * FROM $usertable WHERE fbid='$user'";
  $result2=mysql_query($sql2);
  $count=mysql_fetch_assoc($result2); 
  $i=$count['ran1'];
  $_SESSION['level']=$nexlev;
  //$sql="UPDATE kryptos_user set level=\"".$nexlev."\",time=NOW() where id like \"".$_SESSION['usrno']."\"";
  $t = time();
  $sql="UPDATE $usertable set levelid= $nexlev, time= $t where fbid like \"".$_SESSION['username']."\""; 
  $recset=mysql_query($sql) or die("There is some technical error41");
        
  header('Location: validate.php'); 
}


// for Popuscu
date_default_timezone_set('UTC');
//date_default_timezone_set('Asia/Calcutta');
$sql1="SELECT * from $answerlog where fbid = '".$_SESSION['username']."'";
$result1=mysql_query($sql1);
$count1=mysql_num_rows($result1);
$fbid=$_SESSION['username'];
if($count1<1) 
{
  $sql1="SELECT * from $usertable where fbid = '$fbid'";
  $recset=mysql_query($sql1) or die("There is some technical error6");
  $row=mysql_fetch_assoc($recset);
  $firstname=$row['firstname'];
  $lastname=$row['lastname'];
  $unixtime = date("d-m-Y H:i:s",mktime());
  $log=$unixtime."->".$_POST['answer']."-->".$_SESSION['lev']." @@@";
  $sql="INSERT INTO $answerlog (fbid,firstname,lastname,log)"." VALUES ('$fbid','$firstname','$lastname','$log')";
  $result=mysql_query($sql) or die("There is some technical error5"); 
}
else
{
  $unixtime = date("d-m-Y H:i:s",mktime());
  $forans=preg_replace('/\s+|[^a-zA-Z1234567890запускдвигтеля]/', '', mb_convert_case($_POST['answer']."0x9", MB_CASE_LOWER, "UTF-8"));
  $log=$unixtime."->".$forans."-->".$_SESSION['lev']." @@@";

  $sql="UPDATE $answerlog SET log=CONCAT(log,'$log') WHERE fbid='$fbid'";
  mysql_query($sql) or die("There is some technical error7");
}

 
if($_POST['answer']=="")
$ch_ans=md5(preg_replace('/\s+|[^a-zA-Z1234567890запускдвигтеля]/', '', strtolower("BlUhbLuHhUgEwItCh")));
else
$ch_ans=md5(preg_replace('/\s+|[^a-zA-Z1234567890запускдвигтеля]/', '', mb_convert_case($_POST['answer']."0x9", MB_CASE_LOWER, "UTF-8")));

/* SQl injection removal deploying basic counter measure..... */

$ch_ans=stripslashes($ch_ans);
$ch_ans= mysql_real_escape_string($ch_ans,$connection);
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
      $s="update $usertable set nigger=1 where fbid='".$user."'";
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
$brute="UPDATE $attacktable set lev".$curlev."=".$attackval." where username='".$user."'";
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
              break;
        case 13:break;*/
        case 68:
                $ans_array=array("4afec4430d62026c6b3c2c33293a9004","ce1b4a20a145fb991dd904ccb4900b38");
                $sql3="SELECT * FROM $usertable WHERE fbid='$user'";
                $result3=mysql_query($sql3);
                $count=mysql_fetch_assoc($result3); 
                $i=$count['ran1'];
                $ans=$ans_array[$i];
                break;
        case 62:
                $ans_array=array("fd0979783f225c0d02fb8a3acd781d44",//magneto
                                "cd66a69cec8b37eb8c699859f4d3f1c1",//yellow jacket
                                "19e8a9a9de59e5bc81e6166b4cbf8dc3",//elektra
                                "308c5eee3d6e1b0239a29875d01150d7",//venom
                                "b1c2207e033d8a75112708e54d7b913c",//rogue
                                "b07639b1eb25864f97a2bc18dda61825",//major victory
                                "a1781aac359cc86917593dc4d7aab936",//sif
                                "693cc3b73ec2e850c6128e5ff3bb69b7",//batroc the leaper
                                "53a174c295b01a98e9e815df5d9019af",//wonderman
                                "145922ff151a70a8ab14dff0fa56df25",//Vision
                                "022baa481d365946633ae875253f6007",//X-23
                                "a4910b4f6e40e87f310a5bf7fecca9c2",//Blastaar
                                "4cb0e9c81ad0eaf724f8d7f717d87b4d",//Toxin
                                "d8eaf9904d0123ae1b21f7e502214183",//Sandman
                                "83df95d5450c59f966676aa1f7555c14",//Deadpool
                                "b28d255ba5437d64b5f27fc21106a6ca",//Electro
                                "ce4c7b91b31fada3f737903d035a54b8",//Firestar
                                "0a0551c27c7d7a793a73088e74ae5f06",//Beast
                                "6b975fdea4ec16854eb6c81ac0a177dc",//Thor
                                "9c0023a5515258ffb70cdee2d83234b7",//Strong Guy
                                "1627f0363879cbd89512a8a11bca93a8",//Mystique
                                "2ded32d56ee847b90889da14f8a20fce",//Radioactive Man
                                "faf480f5557a2f85513cc4dec9635aa2",//Captain America
                                "87aea63e1e3af3ec1fdcdc19b44a8df3",//Spider-Woman
                                "a7ea4246b9d11ca32f693b04768f742d",//Green Goblin
                                "0bd8a3e3b5989bc8def75ea7c300542f",//Hawkeye
                                "6b581c4048d7cb9680a0be0b322e3870",//Thanos
                                "6c160dc9e7d0e249f56515419592f4ad",//She-Hulk
                                "f1beaedc72dcd2437d4bd92fba5baa2e",//Starfox
                                "16b0b47835efad4ddccf9b35db4b514d",//Black Widow
                                "db2af344d784aa9fe316465829724fd9",//Hulk
                                "82433b108397340ede5db3e0eed051d6",//Cyclops
                                "3d71e5a806e957ffdabbc5268d7f6f16",//Red Skull
                                "5c90a109a42566a686d8ff0393924cf8",//Daredevil
                                "fbe0e9f54fc6f893da786bf36d2bd930",//Ghost Rider
                                "52752ee63eeb53f4443da15f16314045",//Titania
                                "b411d76894000da8481deee08c5f852f",//Mephisto
                                "ee22c462e62765cd24f725cb8a1e935e",//War Machine
                                "e23954f7144483fd3e9bc90ce7d151cb",//Black Cat
                                "f8c86cd0c57b1cf261137ca99ce8d772",//Mister Fantastic
                                "93842ffd101ebfd11fb8df38040d3887",//Domino
                                "754a6ff23777d1506aaed557ecb5b2b6",//Colossus
                                "384e019819fdaed85aeada73fce88407",//Jocasta
                                "25eb9ef2fb2f269e129c325f966ea004",//Annihilus
                                "8e2f70184a5a4bcec8d6790c326b0b63",//Quicksilver
                                "102dfc59ce8325bc4a4bb78208ffcee6",//Nightcrawler
                                "e95a5de8073e1c8ecb9ba99e49ad9ec7",//Klaw
                                "3829f05eb3744f7995cce7e83b04b56d",//USAgent
                                "theoneistheoneistheone"//garbage value 49
                                );
                if(isset($_SESSION['leader']))
                {
                  $leader=$_SESSION['leader'];
                }
                else
                {
                  $leader=49;
                }
                $ans=$ans_array[$leader-1];
                break;
        case 34:if(isset($_POST['played'])){ 
                  if($_POST['played']==1)
                  {$ans="06f86685cac309dc149ea99c2a6df451";
                  }
                }
                else
                $ans="warnedyouboutthestairsmantoldyoudog";
                break;
        case 8:
              $answer_30=array("dc02555286ce9bdfab3e96d5b6a77663","059b0015e18e3a15535898f209b29186");
              $sql1="SELECT * FROM $usertable WHERE fbid='$user'";
              $result1=mysql_query($sql1);
              $count=mysql_fetch_assoc($result1); 
              $i=$count['ran1'];
              $ans=$answer_30[$i];
              break;
        case 9:
              $answer=array("3e859593bb4823f9c1c6681e1e338581","ff107eb50f62ea464780be30024a3db9","ae25b2ea8452b88eff2e09eedb12c6f3");
              if($ch_ans==$answer[0]||$ch_ans==$answer[1]||$ch_ans==$answer[2])
              {
                $ans=$ch_ans;             
              }
              else
              {
                $ans="xxxxxxxxxxxxxxx";
              }
              break;
        default : $sql="SELECT * from $kryptostable where id =$curlev";
                    $recset=mysql_query($sql) or die("There is some technical error!!");
              $row=mysql_fetch_assoc($recset);
              $ans=$row['answer'];
              break;
      }

if($ch_ans == $ans)
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