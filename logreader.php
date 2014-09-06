<?php
	session_start();
        ini_set('session.cookie_lifetime',  0);
        require "config.php";
        if(isset($_SESSION['usrno'])){
	if($_SESSION['usrno']==$admin1)
	{  ?>
		<form action="#" method="post">
	        <input type="text" name="answer" placeholder="username"/>
	        <input type="submit" value="Go"/>
	        </form>
          <?php
          if(isset($_POST['answer']))
            {

             echo "You are reading log entry of ".$_POST['answer']."<br><br><br>";
             $file = fopen("answers/".$_POST['answer']."X.txt", "r") or exit("Unable to open file!");
                while(!feof($file))
                   {
                     $entry = fgets($file);
                     echo $entry."<br>";
                   }
             fclose($file);
            }
          
	}
   }
	else 
	{
          header('location :loginverify.php');
        }
?>